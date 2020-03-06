<div class="form-group {{ $errors->has('order_id') ? 'has-error' : ''}}">
    <label for="order_id" class="control-label">{{ 'Order Id' }}</label>
    <input class="form-control" name="order_id" type="text" id="order_id" value="{{ isset($reject->order_id) ? $reject->order_id : ''}}" >
    {!! $errors->first('order_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rijected_date') ? 'has-error' : ''}}">
    <label for="rijected_date" class="control-label">{{ 'Rijected Date' }}</label>
    <input class="form-control" name="rijected_date" type="date" id="rijected_date" value="{{ isset($reject->rijected_date) ? $reject->rijected_date : ''}}" >
    {!! $errors->first('rijected_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
    <label for="item_id" class="control-label">{{ 'Item Id' }}</label>
    <input class="form-control" name="item_id" type="text" id="item_id" value="{{ isset($reject->item_id) ? $reject->item_id : ''}}" >
    {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="text" id="quantity" value="{{ isset($reject->quantity) ? $reject->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
