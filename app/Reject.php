<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rejects';

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
    protected $fillable = ['order_id', 'rijected_date', 'item_id', 'quantity'];


    public function item(){
        return $this->belongsTo('App\Item');
    }

}
