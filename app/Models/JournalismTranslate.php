<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalismTranslate extends Model
{
    use HasFactory;

    protected $guarded = false;

    public  function journalism() {
        return $this->hasMany(Journalism::class, 'journalism_id', 'id');
    }
}
