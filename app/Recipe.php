<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['image', 'name', 'price', 'action', 'priority'];
    protected $guarded = [];
}
