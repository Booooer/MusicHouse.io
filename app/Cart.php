<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        "product_id",
        "title",
        "price",
        "count",
        "session_id",
    ];
}
