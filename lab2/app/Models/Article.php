<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        "title", "code", "body", "createDateTime", "author"
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
