<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KicTranslate extends Model
{
    use HasFactory;

    public  function kics() {
        return $this->hasMany(Kic::class, 'kic_id', 'id');
    }
}
