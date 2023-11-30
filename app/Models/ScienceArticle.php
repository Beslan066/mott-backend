<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScienceArticle extends Model
{
    use HasFactory;
    protected $guarded = false;

    public  function translates() {
        return $this->hasMany(ScienceArticleTranslate::class, 'science_article_translates_id', 'id');
    }

    public  function authors() {
        return $this->hasMany(Author::class, 'author_id', 'id');
    }
}
