<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index() {
        $halaman = 1;
        return view('bebas',compact('halaman'));
    }

    function halaman2() {
        $halaman = 2;
        return view('halaman2',compact('halaman'));
    }

    function welcome() {
        $data =[
            ['judul'=> 'judul pertama','subject'=>'halo'],
            ['judul'=> 'judul kedua','subject'=>'hai'],
            ['judul'=> 'judul ketiga','subject'=>'annyeong']
        ];
        return view('konten',compact(['data']));
    }

    function coba() {
        return view('kontennyoba');
    }
}
