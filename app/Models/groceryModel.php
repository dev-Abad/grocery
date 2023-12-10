<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groceryModel extends Model
{
    protected $table = 'items' ;

    protected $fillable = [
        'itemname', 
        'category', 
        'quantity'
    ];
}
