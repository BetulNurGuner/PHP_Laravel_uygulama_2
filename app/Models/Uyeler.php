<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uyeler extends Model
{
    use HasFactory;

    public $table="users"; //ben bu Uyeler modelini Users tablosu için kullanıyorum demek.
    //public $primaryKey="uye_id";  //varsayılan id geliyor ise bu satıra gerek yok ama id yerine tablomda uye_id kullanırsam find() vs de sorun çıkar. Burada tanımla.
}
