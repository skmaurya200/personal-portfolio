<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = ['name','image','description','rating','aprove'];
}
