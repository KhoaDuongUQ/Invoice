<?php

namespace App\Http\Controllers;

use Session;
use App\Item;
use App\Store;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
    * Instantiate a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Store $store)
    {
        $items = $store->items()->orderBy('created_at', 'desc')->paginate(5);
        return view('items.index', [
          'store' => $store,
          'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Store $store)
    {
        return view('items.create', ['store' => $store]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Store $store)
    {
        $request->validate([
          'name' => 'required|max:255|unique:stores,name,NULL,id,store_id,'.$store->id,
          'description' => 'nullable',
          'price' => 'required|numeric',
          'image' => 'nullable|image',
        ]);

        $item = $store->items()->create($request->all());

        $url = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = "/images/items/" . $item->id . '.' . $image->getClientOriginalExtension();
            Storage::disk('s3')->put($path, file_get_contents($image));
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
        } else {
            $path = "/images/items/default.png";
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
        }

        $image = new Image(['url' => $url]);
        $item->image()->save($image);

        Session::flash('status', 'Your new item has been created!');
        return redirect()->route('stores.items.show', [$store, $item]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store, Item $item)
    {
        return view('items.show', [
          'store' => $store,
          'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store, Item $item)
    {
        return view('items.edit', [
        'store' => $store,
        'item' => $item
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store, Item $item)
    {
        $request->validate([
        'name' => 'required|max:255|unique:items,name,'.$item->id.',id,store_id,'.$store->id,
        'description' => 'nullable',
        'price' => 'required|numeric',
        'image' => 'nullable|image',
      ]);

        $item->update($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = "/images/stores/" . $store->id . '.' . $image->getClientOriginalExtension();
            Storage::disk('s3')->put($path, file_get_contents($image));
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
            $item->image()->update(['url' => $url]);
        }

        Session::flash('status', 'Your item details has been updated!');
        return redirect()->route('stores.items.show', [$store, $item]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store, Item $item)
    {
        $item->delete();
        Session::flash('status', 'Your item has been deleted!');
        return redirect()->route('stores.items.index', [$store]);
    }
}
