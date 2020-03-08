<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_name', 'item_id', 'item_code', 'orderd_date', 'delivery_date', 'Location_address', 'city_code', 'deliverd', 'quantity', 'totalCost'];

    public function item(){
        return $this->belongsTo('App\Item');
    }


}
