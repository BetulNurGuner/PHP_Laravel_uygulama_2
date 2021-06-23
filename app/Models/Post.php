<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $table="posts";
    const UPDATED_AT="guncellemeTarihi"; //updated_at varsayılan ismi yerine guncellemeTarihi dedim tabloda bunu belirt.

    public function getUser()
    {
        //user tablosundan uyeyi çekecek 
        return $this->hasOne('App\Models\Uyeler','id','user');
        //posts tablosundaki user bilgisini, Uyeler modelindeki tablonun id kısmında ara.
        //hasOne yani One To One ilişkisi, bir paylaşım bir uye ytarafından yazılmıştır.
        //this yerine Post:: tarzı da kullanıolabilirdi.


    }

}
