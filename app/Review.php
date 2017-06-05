<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "review";
    protected $primaryKey = "reviewID";
    public $fillable = ['customerID','foodItemID','rating','comment'];

public function customer()
{
    return $this->belongsTo('App\customer','customerID');
}

public function foodItem()
{
    return $this->belongsTo('App\foodItem','foodItemID');
}
}