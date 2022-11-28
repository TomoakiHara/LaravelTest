<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelTestController extends Controller
{
    public function get($text1 ="建物です")
     {
    return $text1;
    }

    public function index($text2 ="{room}")
     {
    return "部屋番号は". $text2. "です";
    }
}