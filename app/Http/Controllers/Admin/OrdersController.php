<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests;

use App\Order;
use App\Item;
use App\City;
use App\Total;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class OrdersController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {



        $keyword = $request->get('search');
        $perPage = 5;

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
                ->latest()->paginate($perPage);
        } else {
            $orders = Order::latest()->paginate($perPage);
        }

        return view('admin.orders.index', compact('orders'));


    }

    // public function excel(){

    // }


    public function create()
    {
        $items =Item::all();
        $citys =City::all();
        return view('admin.orders.create',compact('items','citys'));

    }


    public function store(Request $request)
    {

        $requestData = $request->all();
        $order = Order::create($requestData);
        $order_quantity=$order->quantity;


        $item = DB::table('items')->where('id',$order->item_id)->first();
        $item_price = $item->price;


        $city = DB::table('citys')->where('id',$order->city_code)->first();
        $city_price = $city->price;



        $total = new Total();
        $total->order_id = $order->id;
        $total->item_id = $order->item_id;
        $total->city_id = $order->city_code;
        $total->total_price = ($item_price*$order_quantity) + $city_price;
        $total->save();



        return redirect('admin/orders')->with('flash_message', 'Order added!');
    }


    public function show($id)
    {
        $order = Order::findOrFail($id);
        $citys =City::all();
        $total = DB::table('totals')->where('order_id',$id)->first();
        $total_price = $total->total_price;
        return view('admin.orders.show', compact('order','citys','total_price'));



    }


    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $items =Item::all();
        $citys =City::all();
        //$items=Item::pluck('name','id');
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
