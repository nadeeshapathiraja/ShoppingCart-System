<div class="form-group {{ $errors->has('customer_name') ? 'has-error' : ''}}">
    <label for="customer_name" class="control-label">{{ 'Customer Name' }}</label>
    <input class="form-control" name="customer_name" type="text" id="customer_name" value="{{ isset($order->customer_name) ? $order->customer_name : ''}}" >
    {!! $errors->first('customer_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
    <label for="item_id" class="control-label">{{ 'Item Id' }}</label>
    <input class="form-control" name="item_id" type="number" id="item_id" value="{{ isset($order->item_id) ? $order->item_id : ''}}" >
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
    <select id="city_code" name="city_code" class="browser-default custom-select custom-select-lg mb-3" value="{{ isset($item->city_code) ? $item->city_code : ''}}">
        <option selected>Select Drop Off City</option>
        <option value="1">Ampara</option>
        <option value="2">Anuradhapura</option>
        <option value="3">Badulla</option>
        <option value="4">Batticaloa</option>
        <option value="5">Colombo</option>
        <option value="6">Galle</option>
        <option value="7">Gampaha</option>
        <option value="8">Hambantota</option>
        <option value="9">Jaffna</option>
        <option value="10">Kalutara</option>
        <option value="11">Kandy</option>
        <option value="12">Kegalle</option>
        <option value="13">Kilinochchi</option>
        <option value="14">Kurunegala</option>
        <option value="15">Mannar</option>
        <option value="16">Matale</option>
        <option value="17">Matara</option>
        <option value="18">Moneragala</option>
        <option value="19">Mullaitivu</option>
        <option value="20">Nuwara Eliya</option>
        <option value="21">Polonnaruwa</option>
        <option value="22">Puttalam</option>
        <option value="23">Ratnapura</option>
        <option value="24">Trincomalee</option>
        <option value="25">Vavuniya</option>
    </select>
    {!! $errors->first('city_code', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($order->quantity) ? $order->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('totalCost') ? 'has-error' : ''}}">
    <label for="totalCost" class="control-label">{{ 'Totalcost' }}</label>
    <input class="form-control" name="totalCost" type="number" id="totalCost" value="{{ isset($order->totalCost) ? $order->totalCost : ''}}" >
    {!! $errors->first('totalCost', '<p class="help-block">:message</p>') !!}
</div>

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
