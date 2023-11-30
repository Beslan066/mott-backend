<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tale extends Model
{
    use HasFactory;
    protected $table = 'tales';

    protected $guarded = false;

    public  function translates() {
        return $this->hasMany(TaleTranslate::class, 'tale_translates_id', 'id');
    }
}
