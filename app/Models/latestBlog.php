<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class latestBlog extends Model
{
    protected $table = 'latest_blogs';
    protected $fillable = ['title','description','date','image'];
}
