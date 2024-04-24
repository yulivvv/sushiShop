<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function category($category){
        return view('category', compact('category'));
    }


    public function sushirolls($sushirolls = null){
       
        return view('sushirolls', ['sushirolls' => $sushirolls]);
    }

    // public function sets(){
    //     return view('sets');
    // }

    // public function pizzas(){
    //     return view('pizzas');
    // }

    // public function hotdishes(){
    //     return view('hotdishes');
    // }

    // public function drinks(){
    //     return view('drinks');
    // }
    
}
