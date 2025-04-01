<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $table = 'portfolios';
    protected $fillable = ['title','description','btnName','image'];
}
