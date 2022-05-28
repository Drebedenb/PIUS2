<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bond extends Model
{
    use HasFactory;

    protected $table = 'bonds';

    public function tags()
    {
        return $this->hasMany(Tag::class, 'id', 'id_tag');
    }

    public function articles()
    {
        return $this->hasMany(Article::class,'id', 'id_article');
    }
}
