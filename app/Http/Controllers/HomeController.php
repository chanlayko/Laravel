<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class HomeController extends Controller
{
    public function index(){
        $data = posts::all();
        return view('home',compact('data'));
    }
    
    public function about(){
        $data = [
            'contant_key' => 'contant_value'
        ];
        return view('contant',compact('data'));
    }

    public function contant(){
        $data = [
            'about_key' => 'about_value'
        ];
        return view('about',compact('data'));
    }
}
