<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clara extends Model
{
    private static $info = [
    [
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
        'goldar' => "B",
        'alamat' => "Jl. Semanggi Barat no 5e, Malang",
        'motivasi' => "Cobalah untuk tidak menjadi orang yang sukses, tetapi menjadi orang yang bernilai."

    ]
    ];
    public static function getAll(){
        return self::$info;

    }
    public static function getGoldar($id){
        if($id == 1){
            $goldar = "B";
        }else{
            $goldar = "AB";
        }
        return $goldar;
    }
}
