<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    protected $primaryKey = "orderID";
    public $fillable = ['customerMessage','orderStatus','payment','payment_type','customerID'];

    public function customer()
    {
        return $this->belongsTo('App\customer','customerID');
    }
}
