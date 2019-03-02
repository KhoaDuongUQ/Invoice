<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers{
      register as defaultRegister;
    }

    /**
     * Where to redirect users after registration.
     *
     */
    protected function redirectTo()
    {
        return route('verification.notice');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());
        event(new Registered($user));

        $url = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = "/images/users/" . $user->id . '.' . $image->getClientOriginalExtension();
            Storage::disk('s3')->put($path, file_get_contents($image));
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
        } else {
            $path = "/images/users/default.png";
            $url = 'https://s3-' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') .$path;
        }

        $image = new Image(['url' => $url]);
        $user->image()->save($image);

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }
}
