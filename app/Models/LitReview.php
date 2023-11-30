<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LitReview extends Model
{
    use HasFactory;

    protected $guarded = false;

    public  function litReviewTranslate() {
        return $this->hasMany(ScienceArticle::class, 'lit_review_ings', 'id');
    }
}
