<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journalism extends Model
{
    use HasFactory;

    protected $guarded = false;

    public  function translates() {
        return $this->hasMany(JournalismTranslate::class, 'journalism_translates_id', 'id');
    }


}
