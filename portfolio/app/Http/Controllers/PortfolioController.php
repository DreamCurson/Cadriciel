<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
     public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function resume(){
        return view('resume');
    }

    public function contactForm(Request $request){
       return view('contact', ['data' => $request]);
   }
}
