<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Tampilan Home Utama User
    public function index()
    {
        return view("index");
    }

    // Tampilan Detail
    // public function detail(String $parameter)
    // {
    //     // $data = Http::accept("application/json")->get(env('SERVER_API') . 'novels/'. $parameter)

    //     $data = json_decode($data);

    //     // return view('detail', $data)
    //     return view('detail')
    // }
}
