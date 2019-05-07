<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BLogController extends Controller
{
    public function home()
    {
        return view('blog.index');
    }
   
    public function kontak()
    {
        return view('blog.kontak');
    }

    public function tentang()
    {
        return view('blog.tentang');
    }
}
