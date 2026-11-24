<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = ['name', 'body'];
}
