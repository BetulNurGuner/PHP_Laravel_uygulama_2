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

        //belongsTo ile tersten bağlanıyor. hasOne daha kullanışlı ama onu kullanıyorum.

    }

    public function getComments()
    {
        return $this->hasMany('App\Models\comment','post','id')->where('status',1);
        //Posta gelen yorumları gösterecek . Ama status 0 olanlar onaylanmamış, 1 olanlar onaylanmış yorum.
        //Onaylanmış yorumları göstermek istediğim için where sorgusu ekledim sonuna.
    }

}
