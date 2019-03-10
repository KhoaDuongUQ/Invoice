<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Store;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    /**
     * Show the Homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $stores = auth()->user()->stores()->get();
            return view('home.auth', [
              'stores' => $stores
            ]);
        } else {
            return view('home.guest');
        }
    }
}
