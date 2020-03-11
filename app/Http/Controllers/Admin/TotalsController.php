<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Total;
use Illuminate\Http\Request;

class TotalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $totals = Total::where('order_id', 'LIKE', "%$keyword%")
                ->orWhere('item_id', 'LIKE', "%$keyword%")
                ->orWhere('city_id', 'LIKE', "%$keyword%")
                ->orWhere('total_price', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $totals = Total::latest()->paginate($perPage);
        }

        return view('Admin.totals.index', compact('totals'));
    }


    public function create()
    {
        return view('Admin.totals.create');
    }


    public function store(Request $request)
    {

        $requestData = $request->all();

        Total::create($requestData);

        return redirect('totals')->with('flash_message', 'Total added!');
    }


    public function show($id)
    {
        $total = Total::findOrFail($id);

        return view('Admin.totals.show', compact('total'));
    }


    public function edit($id)
    {
        $total = Total::findOrFail($id);

        return view('Admin.totals.edit', compact('total'));
    }


    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $total = Total::findOrFail($id);
        $total->update($requestData);

        return redirect('totals')->with('flash_message', 'Total updated!');
    }


    public function destroy($id)
    {
        Total::destroy($id);

        return redirect('totals')->with('flash_message', 'Total deleted!');
    }
}
