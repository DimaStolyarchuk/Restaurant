<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['image', 'title', 'date', 'name', 'description', 'action', 'priority'];
    protected $guarded = [];
}
