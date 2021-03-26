<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Nama : Thalia Amira Rifda <br> NIM : 2041723005";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan Id ".$id;
    }
    
}
