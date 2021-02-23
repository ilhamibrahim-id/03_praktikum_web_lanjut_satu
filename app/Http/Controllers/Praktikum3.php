<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Praktikum3 extends Controller
{
    public function index() {
        return view('home', ['awal' => 'Utama']);
       }
       public function edugame(){ 
        return view('product', ['kedua' => 'products']);
        }
        public function storybooks(){ 
            return view('product', ['kedua' => 'products']);
        }
        public function kidsongs(){ 
            return view('product', ['kedua' => 'products']);

       }
       public function friendkids(){ 
        return view('product', ['kedua' => 'products']);

       }

    public function about(){
        return view('about-us', ['empat' => 'about us']);
    }
    public function karir(){ 
        return view('program', ['ketiga' => 'program']);
        }
    public function magang(){ 
        return view('program', ['ketiga' => 'program']);
    }
    public function industri(){ 
        return view('program', ['ketiga' => 'program']);
    }

        public function berita($isi){
            return view('news', ['new' => 'berita'], ['isin' => $isi]);
        } 
}
