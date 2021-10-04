<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsPosts extends Model
{
    public $timestamps = false;
    protected $fillable = ['header', 'article', 'image'];
}
