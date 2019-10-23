<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index2(Request $r, $nome="fulano")
    {
        return "Hello world, $nome";
    }


    public function index()
    {
        return "Hello world";
    }

    public function info()
    {
        phpinfo();
    }

    public function home()
    {
        return redirect('/home');
    }

    public function boaTarde($nome="fulano")
    {
        return view('boa-tarde', ["nome" => $nome]);
    }


}
