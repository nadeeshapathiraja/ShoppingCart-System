<div class="form-group {{ $errors->has('order_id') ? 'has-error' : ''}}">
    <label for="order_id" class="control-label">{{ 'Order Id' }}</label>
    <input class="form-control" name="order_id" type="text" id="order_id" value="{{ isset($total->order_id) ? $total->order_id : ''}}" >
    {!! $errors->first('order_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
    <label for="item_id" class="control-label">{{ 'Item Id' }}</label>
    <input class="form-control" name="item_id" type="number" id="item_id" value="{{ isset($total->item_id) ? $total->item_id : ''}}" >
    {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('city_id') ? 'has-error' : ''}}">
    <label for="city_id" class="control-label">{{ 'City Id' }}</label>
    <input class="form-control" name="city_id" type="number" id="city_id" value="{{ isset($total->city_id) ? $total->city_id : ''}}" >
    {!! $errors->first('city_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_price') ? 'has-error' : ''}}">
    <label for="total_price" class="control-label">{{ 'Total Price' }}</label>
    <input class="form-control" name="total_price" type="number" id="total_price" value="{{ isset($total->total_price) ? $total->total_price : ''}}" >
    {!! $errors->first('total_price', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
