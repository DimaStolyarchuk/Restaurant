<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = 'indexs';
    protected $fillable = ['image', 'title', 'description'];
    protected $guarded = [];
}
