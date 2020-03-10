<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'totals';

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
    protected $fillable = ['order_id', 'item_id', 'city_id', 'total_price'];

    
}
