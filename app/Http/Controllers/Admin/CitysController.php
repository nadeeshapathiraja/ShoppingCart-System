<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\City;
use Illuminate\Http\Request;

class CitysController extends Controller
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
            $citys = City::where('name', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $citys = City::latest()->paginate($perPage);
        }

        return view('Admin.citys.index', compact('citys'));
    }


    public function create()
    {
        return view('Admin.citys.create');
    }


    public function store(Request $request)
    {

        $requestData = $request->all();

        City::create($requestData);

        return redirect('citys')->with('flash_message', 'City added!');
    }


    public function show($id)
    {
        $city = City::findOrFail($id);

        return view('Admin.citys.show', compact('city'));
    }


    public function edit($id)
    {
        $city = City::findOrFail($id);

        return view('Admin.citys.edit', compact('city'));
    }


    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $city = City::findOrFail($id);
        $city->update($requestData);

        return redirect('citys')->with('flash_message', 'City updated!');
    }


    public function destroy($id)
    {
        City::destroy($id);

        return redirect('citys')->with('flash_message', 'City deleted!');
    }


}
