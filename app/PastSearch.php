<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastSearch extends Model
{
    protected $fillable = [
        'item_id', 'title', 'seller_name', 'price'
    ];
}
