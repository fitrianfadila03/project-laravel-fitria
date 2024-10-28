<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); //ini merujuk ke halaman index.blade.php resouces/view
    }

    public function login(){
        return view('login'); //ini merujuk ke halaman login.blade.php resouces/view
    }

    public function about(){
        $data = [
            'name'     => 'Fitria Nur Fadila',
            'address'  => 'Kroya',
            'email'    => 'fitriafadhilah22@gmail.com'
        ];
        return view('about', $data); //ini merujuk ke halaman about.blade.php resouces/view
    }
}
