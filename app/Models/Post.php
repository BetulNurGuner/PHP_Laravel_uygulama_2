<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $table="posts";
    const UPDATED_AT="guncellemeTarihi"; //updated_at varsayılan ismi yerine guncellemeTarihi dedim tabloda bunu belirt.
}
