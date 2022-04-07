<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
   public function index(){
       return view('biodata',[
           'title' =>Home::first()->title,
           'np'    =>Home::first()->np,
           'nama'  =>Home::first()->nama,
           'ttl'   =>Home::first()->ttl,
           'jk'    =>Home::first()->jk,
           'tb'    =>Home::first()->tb,
           'bb'    =>Home::first()->bb,
           'agama' =>Home::first()->agama,
           'telp'  =>Home::first()->telp,
           'email' =>Home::first()->email,
           'goldar'=>Home::first()->goldar,
           'alamat'=>Home::first()->alamat,
           'motivasi'=>Home::first()->motivasi
       ]);

   }
}
