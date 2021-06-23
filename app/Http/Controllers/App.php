<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use App\Models\User;
use App\Models\Uyeler;
use App\Models\Post;
//use DB;


class App extends Controller
{

    public function index()
    {
        //$users=User::all();
        //print_r($users);
        
        //echo $users=User::where('id','>',4)->get();

        //Uye ekleme 1.YOl
        //$user=new User;
        //$user->name="Umut";
        //$user->email="umut@gmail.com";
        //$user->surname="Yılmaz";
        //$user->password=md5(789);
        //$user->save();
    
        //Uye ekleme 2.yol
        //User::insert(['name'=>"Burak", 'email'=>"burak@gmail.com", 'surname'=>"Ozcan", 'password'=>md5(456789)]);
        
        //User modelini kullanırken user tablosuna erişim:
        //$kisi=User::find(8);
        //print_r($kisi);

        //Uyeler modelinden users tablosuna ulaşırken
        //$kisi=Uyeler::find(8);
        //print_r($kisi);

        //Post::insert(['title'=>"Yapay Zeka", 'user'=>8, 'see'=>0,'description'=>"aabafjdajgajfgjklfanfla"]);
        //Post::where('id',1)->update(['see'=>1]);


        $paylasim=Post::find(1); //1 id li paylaşımı çeker Posts tablosundan
        //print_r($paylasim);
        //echo $paylasim->title;
        //echo $paylasim->getUser->name;
        echo $paylasim->title. '- Paylasim Sahibi: '.$paylasim->getUser->name. ' '.$paylasim->getUser->surname;
    }

    //web.php de alıyorum id bilgisini
    //public function uye($id)
    //{
    //    $users=DB::table('users')->find($id);
    //    echo $users->name;
    //}
    
    //public function index()
    //{
        // $users=DB::table('users')->where('id',4)->get();
        //echo $users[0]->name;
        //yukarıdaki satırda array içinde veriyor bunu engellemek için get değil first() kullan.

    //    $users=DB::table('users')->where('id','>=',1)->where('surname','Guner')->get();
        //echo $users->name;
        //print_r($users);
    //    foreach ($users as $user)
    //    {
    //        echo $user->name."<br />";
    //    }
        
        
        
        //id üzerinden veriye ulaşacaksam where kullanmadan find ile de çözülebilir.
        //$users=DB::table('users')->find(4);
        //4 nolu id deki veriyi bulur.
        
        //return "route calisti";

        //echo      $users=DB::table('users')->where('id','>=',3)->where('surname','Guner')->count();
    //    $users=DB::table('users')->where(['id'=>1,'surname'=>'Guner'])->get();
    //    echo $users;

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
    //    DB::table('users')->where('id',5)->update
    //    (
    //        [
    //            'email'=>"a123@hotmail.com"
                //id si 5 olan üyenin gmail olan maili hotmaile cevrildi.
    //        ]
    //        );

        //DB::table('users')->where('id','>',1)->delete();
        //id si 1 den büyük tüm kayıtları siler

        //DB::table('users')->where('id',4)->delete();
        //id si 4 olan uyeyi sil.

    //    $users1 =DB::table('users')->orderBy('id','DESC')->get();
    //    print_r($users1);
        //ASC veya DESC olarak 2 sekilde sıralanabilir
        //orderby dan once where şartları da eklenebilir.
    //}
    
}
