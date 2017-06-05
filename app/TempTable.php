<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempTable extends Model
{
    protected $table = "tamptable";
    protected $primaryKey = "tampID";
    public $fillable = ['foodItemID','foodName', 'quantity', 'price', 'sessionUniq'];


}
