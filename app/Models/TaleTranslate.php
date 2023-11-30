<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaleTranslate extends Model
{
    use HasFactory;
    protected $guarded = false;

    public  function tales() {
        return $this->hasMany(Tale::class, 'tale_id', 'id');
    }
}
