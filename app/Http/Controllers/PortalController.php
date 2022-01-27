<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //halaman view portal
    public function homee(){
        return view('portal.home');
    }

    //halaman view portal
    public function trenn(){
        return view('portal.berita_kategori');
    }

    //halaman view portal detail_berita
    public function detail_berita(){
        return view('portal.detail_berita');
    }
}
