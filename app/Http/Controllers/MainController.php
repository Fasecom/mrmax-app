<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex() {
        return view('home');
    }

    public function showArray() {
        $array = [ 
        ['id' => 1, 'title' => 'продукт 1', 'price' => 100, 'path' => 'img/bread.png'], 
        ['id' => 2, 'title' => 'продукт 2', 'price' => 200, 'path' => 'img/bread.png'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 300, 'path' => 'img/bread.png']
    ];
        return view('array', compact('array'));  
    }
}
