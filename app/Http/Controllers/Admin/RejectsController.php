<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Reject;
use Illuminate\Http\Request;

class RejectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.rejects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Reject::create($requestData);

        return redirect('rejects')->with('flash_message', 'Reject added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $reject = Reject::findOrFail($id);

        return view('Admin.rejects.show', compact('reject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $reject = Reject::findOrFail($id);

        return view('Admin.rejects.edit', compact('reject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $reject = Reject::findOrFail($id);
        $reject->update($requestData);

        return redirect('rejects')->with('flash_message', 'Reject updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Reject::destroy($id);

        return redirect('rejects')->with('flash_message', 'Reject deleted!');
    }
}
