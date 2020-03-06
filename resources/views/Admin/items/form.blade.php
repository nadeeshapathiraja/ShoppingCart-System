<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($item->name) ? $item->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('item_code') ? 'has-error' : ''}}">
    <label for="item_code" class="control-label">{{ 'Item Code' }}</label>
    <input class="form-control" name="item_code" type="text" id="item_code" value="{{ isset($item->item_code) ? $item->item_code : ''}}" >
    {!! $errors->first('item_code', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($item->price) ? $item->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($item->photo) ? $item->photo : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('deliverd') ? 'has-error' : ''}}">
    <label for="order_type" class="control-label">{{ 'Order Type' }}</label>
    <select name="order_type" id="order_type" value="{{ isset($item->order_type) ? $item->order_type : ''}}" class="browser-default custom-select custom-select-lg mb-3">
        <option value="Pre Order">Pre Order</option>
        <option value="Post Order">Place Order</option>
    </select>
    {!! $errors->first('order_type', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('colour') ? 'has-error' : ''}}">
    <label for="colour" class="control-label">{{ 'Colour' }}</label>
    <input class="form-control" name="colour" type="text" id="colour" value="{{ isset($item->colour) ? $item->colour : ''}}" >
    {!! $errors->first('colour', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($item->quantity) ? $item->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
