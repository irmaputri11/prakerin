<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contohcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['irma','aziz','yulia','merin','aida','regina',
        'robby','mia','resty','caca'];
        return $data; 
    }

    public function kelas(){
    $kelas = ['x rpl 1','x rpl 2','x rpl 3','xi rpl 1','xi rpl 2','xi tkr 1',
        'xi tkr 2','xi tsm 1','xi tsm 2','x tsm 1'];
        return $kelas;
    }

    public function index2(){
    $data = [
        ["nama" => "irma",
        "kelas" => 2,
        "hobby" => ["makan","tidur","main"],
        "guru" => [
            "nama1" => "ujang"
        ]
        ],
        [
        "nama" => "irma",
        "kelas" => 2,
        "hobby" => ["makan","tidur","main"],
        "guru" => [
            "nama1" => "ujang"
        ]
        ]
        ];
        return $data;
    }
}

