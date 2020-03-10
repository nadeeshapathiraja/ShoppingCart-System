<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use App\City;
use App\Reject;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $oc=Order::order_count();
        $ic=Item::item_count();
        $rc=Reject::reject_count();
        return view('home',compact('oc','ic','rc'));
    }

}
