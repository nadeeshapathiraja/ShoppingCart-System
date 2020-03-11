@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Item {{ $item->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/items') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/items/' . $item->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('items' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $item->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Name </th>
                                        <td> {{ $item->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Item Code </th>
                                        <td> {{ $item->item_code }} </td>
                                    </tr>
                                    <tr>
                                        <th> Price </th>
                                        <td> {{ $item->price }} </td>
                                    </tr>
                                    <tr>
                                        <th> Item Quantity </th>
                                        <td> {{ $item->quantity }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
