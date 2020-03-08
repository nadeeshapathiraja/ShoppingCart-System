<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Order;
use App\Item;
use App\City;
use DB;

use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $orders = Order::where('customer_name', 'LIKE', "%$keyword%")
                ->orWhere('item_id', 'LIKE', "%$keyword%")
                ->orWhere('item_code', 'LIKE', "%$keyword%")
                ->orWhere('orderd_date', 'LIKE', "%$keyword%")
                ->orWhere('delivery_date', 'LIKE', "%$keyword%")
                ->orWhere('Location_address', 'LIKE', "%$keyword%")
                ->orWhere('city_code', 'LIKE', "%$keyword%")
                ->orWhere('deliverd', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('totalCost', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $orders = Order::latest()->paginate($perPage);
        }

        return view('admin.orders.index', compact('orders'));
    }


    public function create()
    {
        $items =Item::all();
        $citys =City::all();
        return view('admin.orders.create',compact('items','citys'));


    }


    public function store(Request $request)
    {

        $requestData = $request->all();

        Order::create($requestData);

        return redirect('admin/orders')->with('flash_message', 'Order added!');
    }


    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('admin.orders.show', compact('order'));



    }


    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $items =Item::all();
        $citys =City::all();
        return view('admin.orders.edit', compact('order','items','citys'));
    }


    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $order = Order::findOrFail($id);
        $order->update($requestData);

        return redirect('admin/orders')->with('flash_message', 'Order updated!');
    }


    public function destroy($id)
    {
        Order::destroy($id);

        return redirect('admin/orders')->with('flash_message', 'Order deleted!');
    }

}
