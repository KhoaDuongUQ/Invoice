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
            $stores_count = Store::count();
            $stores = auth()->user()->stores()->orderBy('created_at', 'desc')->take(10)->get();
            return view('home.auth', [
            'stores' => $stores,
            'stores_count' => $stores_count,
          ]);
        } else {
            return view('home.guest');
        }
    }
}
