<?php

namespace App\Http\Controllers;


use App\Imports\ProductsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class tset extends Controller
{
    public function index(){

        return view('front.index');
    }
    public function contact(){
        return view('front.contact');
    }
    public function about(){
        return view('front.about');
    }
    public function menu(){
        return view('front.menu');
    }
    public function import(){
        Excel::import(new ProductsImport, 'products.xlsx');
        return redirect('/');
    }

}
