<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
        protected $table = "orderItem";
        protected $primaryKey = "orderItemID";
        public $fillable = ['foodItemID','orderID','quantity'];


        public function foodItem()
        {
            return $this->belongsTo('App\foodItem','foodItemID');
        }

        public function order()
        {
            return $this->belongsTo('App\order','orderID');
        }
}