<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests;

use App\Item;
use App\Order;
use App\City;
use App\Total;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ItemsController extends Controller
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
            $items = Item::where('name', 'LIKE', "%$keyword%")
                ->orWhere('item_code', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('photo', 'LIKE', "%$keyword%")
                ->orWhere('order_type', 'LIKE', "%$keyword%")
                ->orWhere('colour', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $items = Item::latest()->paginate($perPage);
        }

        return view('Admin.items.index', compact('items'));
    }


    public function create()
    {
        return view('Admin.items.create');
    }


    public function store(Request $request)
    {

        $requestData = $request->all();
                if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }



        //New Changes
        $requestData = $request->all();
        $item = Item::create($requestData);

        if($item->item_id){

            $order = DB::table('orders')->where('item_id',$item->item_id)->first();
            $order_quantity=$order->quantity;

            $item = DB::table('items')->where('id',$order->item_id)->first();
            $item_quantity=$item->quantity;

            $rejection = DB::table('rejects')->where('item_id',$item->item_id)->first();
            $reject_quantity = $rejection->quantity;

            if($order->item_id){
                if($rejection->item_id){
                    $item->quantity =$item_quantity + $reject_quantity - $order_quantity;
                }else{
                    $item->quantity =$item_quantity - $order_quantity;
                }
            }

            Item::create($requestData);

        }




        return redirect('items')->with('flash_message', 'Item added!');
    }


    public function show($id)
    {
        $item = Item::findOrFail($id);

        return view('Admin.items.show', compact('item'));
    }


    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('Admin.items.edit', compact('item'));
    }


    public function update(Request $request, $id)
    {

        $requestData = $request->all();
                if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }

        $item = Item::findOrFail($id);
        $item->update($requestData);

        return redirect('items')->with('flash_message', 'Item updated!');
    }


    public function destroy($id)
    {
        Item::destroy($id);

        return redirect('items')->with('flash_message', 'Item deleted!');
    }
}
