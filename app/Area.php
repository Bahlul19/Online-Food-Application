<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = "area";
    protected $primaryKey = "areaID";
    public $fillable = ['areaName'];


    public function scopeLatest($query)
    {
        return $query->orderBy('areaID','asc')->paginate(10);
    }
}

