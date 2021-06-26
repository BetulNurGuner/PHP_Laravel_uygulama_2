<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    public function getUser()
    {
        return $this->hasOne('App\Models\Uyeler','id','user');
    }
}
