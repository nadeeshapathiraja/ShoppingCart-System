<div class="form-group {{ $errors->has('customer_name') ? 'has-error' : ''}}">
    <label for="customer_name" class="control-label">{{ 'Customer Name' }}</label>
    <input class="form-control" name="customer_name" type="text" id="customer_name" value="{{ isset($order->customer_name) ? $order->customer_name : ''}}" >
    {!! $errors->first('customer_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
    <label for="item_id" class="control-label">{{ 'Item Id' }}</label>
    <select class="form-control" name="item_id" id="item_id" value="{{ isset($order->item_id) ? $order->item_id : ''}}">
        @foreach ($items as $item)
            @if($formMode === 'edit')
                <option value="{{ $item->id }}" {{ ( $item->id == $order->item_id) ? 'selected' : '' }}>{{ $item->name }}</option>
            @else
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endif
        @endforeach
    </select>

    {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('item_code') ? 'has-error' : ''}}">
    <label for="item_code" class="control-label">{{ 'Item Code' }}</label>
    <input class="form-control" name="item_code" type="text" id="item_code" value="{{ isset($order->item_code) ? $order->item_code : ''}}" >
    {!! $errors->first('item_code', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('orderd_date') ? 'has-error' : ''}}">
    <label for="orderd_date" class="control-label">{{ 'Orderd Date' }}</label>
    <input class="form-control" name="orderd_date" type="date" id="orderd_date" value="{{ isset($order->orderd_date) ? $order->orderd_date : ''}}" >
    {!! $errors->first('orderd_date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('delivery_date') ? 'has-error' : ''}}">
    <label for="delivery_date" class="control-label">{{ 'Delivery Date' }}</label>
    <input class="form-control" name="delivery_date" type="date" id="delivery_date" value="{{ isset($order->delivery_date) ? $order->delivery_date : ''}}" >
    {!! $errors->first('delivery_date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Location_address') ? 'has-error' : ''}}">
    <label for="Location_address" class="control-label">{{ 'Location Address' }}</label>
    <input class="form-control" name="Location_address" type="text" id="Location_address" value="{{ isset($order->Location_address) ? $order->Location_address : ''}}" >
    {!! $errors->first('Location_address', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('city_code') ? 'has-error' : ''}}">
    <label for="city_code" class="control-label">{{ 'City' }}</label><br/>
    <select class="form-control" name="city_code" id="city_code" value="{{ isset($order->city_code) ? $order->city_code : ''}}">
        @foreach ($citys as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
    {!! $errors->first('city_code', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($order->quantity) ? $order->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>

{{-- <div class="form-group {{ $errors->has('totalCost') ? 'has-error' : ''}}">
    <label for="totalCost" class="control-label">{{ 'Totalcost' }}</label>
    <input class="form-control" name="totalCost" type="number" id="totalCost" value="{{ isset($order->totalCost) ? $order->totalCost : ''}}" >
    {!! $errors->first('totalCost', '<p class="help-block">:message</p>') !!}
</div> --}}

<div class="form-group {{ $errors->has('city_code') ? 'has-error' : ''}}">
    <label for="deliverd" class="control-label">{{ 'Deliverd' }}</label><br/>
    <select id="deliverd" name="deliverd" class="browser-default custom-select custom-select-lg mb-3" value="{{ isset($item->deliverd) ? $item->deliverd : ''}}">
        <option value="0" >No</option>
        <option value="1" >Yes</option>
    </select>
    {!! $errors->first('city_code', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
