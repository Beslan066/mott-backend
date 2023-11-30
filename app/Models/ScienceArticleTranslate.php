<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScienceArticleTranslate extends Model
{
    use HasFactory;

    public  function scienceArticles() {
        return $this->hasMany(ScienceArticle::class, 'science_article_id', 'id');
    }
}
