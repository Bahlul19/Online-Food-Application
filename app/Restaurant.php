<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = "restaurant";
    protected $primaryKey = "restaurantID";
    public $fillable = ['restaurantName','areaID'];

    public function area()
    {
        return $this->belongsTo('App\area','areaID');
    }

    public static function scopeLatest($query)
    {
        return $query->orderBy('restaurantID','asc')->paginate(6);
    }
}