<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class App extends Controller
{

    //web.php de alıyorum id bilgisini
    public function uye($id)
    {
        $users=DB::table('users')->find($id);
        echo $users->name;
    }
    
    public function index()
    {
        // $users=DB::table('users')->where('id',4)->get();
        //echo $users[0]->name;
        //yukarıdaki satırda array içinde veriyor bunu engellemek için get değil first() kullan.

        $users=DB::table('users')->where('id','>=',1)->where('surname','Guner')->get();
        //echo $users->name;
        //print_r($users);
        foreach ($users as $user)
        {
            echo $user->name."<br />";
        }
        
        
        
        //id üzerinden veriye ulaşacaksam where kullanmadan find ile de çözülebilir.
        //$users=DB::table('users')->find(4);
        //4 nolu id deki veriyi bulur.
        
        //return "route calisti";

        //echo      $users=DB::table('users')->where('id','>=',3)->where('surname','Guner')->count();
        $users=DB::table('users')->where(['id'=>1,'surname'=>'Guner'])->get();
        echo $users;

        /* Veritabanına veri ekleme
        DB::table('users')->insert
        (
            [
                'name'=>"Ahmet",
                'email'=>"a123@gmail.com",
                'surname'=>"aydın",
                'password'=>md5(123)

            ]

            );
        */
        DB::table('users')->where('id',5)->update
        (
            [
                'email'=>"a123@hotmail.com"
                //id si 5 olan üyenin gmail olan maili hotmaile cevrildi.
            ]
            );

        //DB::table('users')->where('id','>',1)->delete();
        //id si 1 den büyük tüm kayıtları siler

        //DB::table('users')->where('id',4)->delete();
        //id si 4 olan uyeyi sil.

        $users1 =DB::table('users')->orderBy('id','DESC')->get();
        print_r($users1);
        //ASC veya DESC olarak 2 sekilde sıralanabilir
        //orderby dan once where şartları da eklenebilir.
    }
    
}
