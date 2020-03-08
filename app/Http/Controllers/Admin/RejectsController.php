<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Reject;
use App\Item;
use Illuminate\Http\Request;

class RejectsController extends Controller
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
            $rejects = Reject::where('order_id', 'LIKE', "%$keyword%")
                ->orWhere('rijected_date', 'LIKE', "%$keyword%")
                ->orWhere('item_id', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $rejects = Reject::latest()->paginate($perPage);
        }

        return view('Admin.rejects.index', compact('rejects'));
    }


    public function create()
    {
        $items =Item::all();
        return view('Admin.rejects.create',compact('items'));
    }


    public function store(Request $request)
    {

        $requestData = $request->all();

        Reject::create($requestData);

        return redirect('rejects')->with('flash_message', 'Reject added!');
    }


    public function show($id)
    {
        $reject = Reject::findOrFail($id);

        return view('Admin.rejects.show', compact('reject'));
    }


    public function edit($id)
    {
        $reject = Reject::findOrFail($id);
        $items =Item::all();
        return view('Admin.rejects.edit', compact('reject','items'));
    }


    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $reject = Reject::findOrFail($id);
        $reject->update($requestData);

        return redirect('rejects')->with('flash_message', 'Reject updated!');
    }


    public function destroy($id)
    {
        Reject::destroy($id);

        return redirect('rejects')->with('flash_message', 'Reject deleted!');
    }
}
