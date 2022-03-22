<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clara;
class ClaraController extends Controller
{
    public static function index(){
        return view('home');
    }
    public static function biodata(){
        $info=array(
            'title' => "Biodata",
            'np' => "Lalaaaaa",
            'nama' => "Clara Adriana Sidauruk",
            'ttl' => "Perdagangan, 24 Januari 2002",
            'jk' => "Perempuan",
            'tb' => "163",
            'bb' => "62",
            'agama' => "Kristen",
            'telp' => "082369012850",
            'email' => "clara.adrianaorc@gmail.com",
            'goldar' => Clara::getGoldar(1),
            'alamat' => "Jl. Semanggi Barat no 5e, Malang",
            'motivasi' => "Cobalah untuk tidak menjadi orang yang sukses, tetapi menjadi orang yang bernilai."
        );
        return view('biodata', $info);
    }
    public static function contact(){
        return view('contact');
    }
}
