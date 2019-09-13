<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected  $fillable = [
        'first_name',
        'last_name',
        'email',
        'type',
        'price'
    ];
}
