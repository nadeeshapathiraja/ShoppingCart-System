@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Order {{ $order->id }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <a href="{{ url('/admin/orders') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                <a href="{{ url('/admin/orders/' . $order->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('admin/orders' . '/' . $order->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            </div>
                            <div class="col-md-3">
                                @if($order->deliverd)
                                    <button class="btn btn-success">Completed</button>
                                @else
                                    <button class="btn btn-warning">Not Completed</button>
                                @endif
                            </div>
                        </div>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">

                                <tbody>

                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $order->id }}</td>
                                    </tr>

                                    <tr>
                                        <th> Customer Name </th>
                                        <td> {{ $order->customer_name }} </td>
                                    </tr>

                                    <tr>
                                        <th> Item Id </th>
                                        <td> {{ $order->item->name }} </td>
                                    </tr>

                                    <tr>
                                        <th> Item Code </th>
                                        <td> {{ $order->item_code }} </td>
                                    </tr>
                                    <tr>
                                        <th> City </th>
                                        <td> {{ $order->city->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Delivery Address </th>
                                        <td> {{ $order->Location_address }} </td>
                                    </tr>
                                    <tr>
                                        <th> Total Cost </th>
                                        <td> {{ $total_price }} </td>
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
