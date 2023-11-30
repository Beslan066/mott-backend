<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kic extends Model
{
    use HasFactory;
    protected $table = 'kics';

    protected $guarded = false;

    public  function translates() {
        return $this->hasMany(KicTranslate::class, 'kic_translates_id', 'id');
    }
}
