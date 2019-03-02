<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\User;
use App\Image;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user,
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', [
          'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        ]);

        $user->update($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = "/images/users/" . $user->id . '.' . $image->getClientOriginalExtension();
            Storage::disk('s3')->put($path, file_get_contents($image));
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
            $user->image()->update(['url' => $url]);
        }

        Session::flash('status', 'Your account details has been updated!');
        return redirect()->route('users.show', [$user]);
    }
}
