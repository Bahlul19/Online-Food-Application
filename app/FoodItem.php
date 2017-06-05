<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $table = "foodItem";
    protected $primaryKey = "foodItemID";
    public $fillable = ['foodName','foodDescription','price','foodTag','restaurantID'];

    public function restaurant()
    {
        return $this->belongsTo('App\restaurant','restaurantID');
    }

    public static function scopeLatest($query)
    {
        return $query->orderBy('foodItemID','asc')->paginate(5);
    }
}
