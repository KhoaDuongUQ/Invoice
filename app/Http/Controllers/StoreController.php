<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Store;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
    * Instantiate a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->authorizeResource(Store::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $stores= $user->stores()->orderBy('created_at', 'desc')->paginate(5);
        return view('stores.index', [
          'user' => $user,
          'stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
          'name' => 'required|max:255|unique:stores,name,NULL,id,user_id,'.auth()->user()->id,
          'address' => 'required|max:255',
          'description' => 'nullable',
          'image' => 'nullable|image',
        ]);

        $store = $user->stores()->create($request->all());

        $url = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = "/images/stores/" . $store->id . '.' . $image->getClientOriginalExtension();
            Storage::disk('s3')->put($path, file_get_contents($image));
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
        } else {
            $path = "/images/stores/default.png";
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
        }

        $image = new Image(['url' => $url]);
        $store->image()->save($image);

        Session::flash('status', 'Your new store has been created!');
        return redirect()->route('users.stores.show', [$user, $store]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Store $store)
    {
        return view('stores.show', [
            'user' => $user,
            'store' => $store,
            'items' => $store->items()->orderBy('created_at', 'desc')->take(5)->get(),
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Store $store)
    {
        return view('stores.edit', [
          'user' => $user,
          'store' => $store,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Store $store)
    {
        $request->validate([
          'name' => 'required|max:255|unique:stores,name,'.$store->id.',id,user_id,'.auth()->user()->id,
          'address' => 'required|max:255',
          'description' => 'nullable',
          'image' => 'nullable|image',
        ]);

        $store->update($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = "/images/stores/" . $store->id . '.' . $image->getClientOriginalExtension();
            Storage::disk('s3')->put($path, file_get_contents($image));
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
            $store->image()->update(['url' => $url]);
        }

        Session::flash('status', 'Your store details has been updated!');
        return redirect()->route('users.stores.show', [$user, $store]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Store $store)
    {
        $store->delete();
        Session::flash('status', 'Your store has been deleted!');
        return redirect()->route('users.stores.index', [$user]);
    }
}
