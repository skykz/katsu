<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public $table = 'orders';
    public $fillable = ['name','telephone_number','comment'];

}
