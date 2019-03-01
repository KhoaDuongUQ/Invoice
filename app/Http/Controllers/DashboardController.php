<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Store;

class DashboardController extends Controller
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

    public function index()
    {
        $user = auth()->user();
        $stores_count = Store::count();
        $items_count = Item::count();
        $stores = $user->stores()->orderBy('created_at', 'desc')->take(10)->get();
        $items = $user->items()->orderBy('created_at', 'desc')->take(10)->get();
        return view('dashboard.index', [
          'user' => $user,
          'stores' => $stores,
          'stores_count' => $stores_count,
          'items' => $items,
          'items_count' => $items_count
        ]);
    }
}
