<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
      'name', 'description', 'text'
    ];

    protected $table = 'articles';
}
