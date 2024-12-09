<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Home extends Controller
{
    public function index(){
        return view('index');
    }

    public function tiga_orang(){
        return view('tiga_orang');
    }

    public function siapaAku(){
        return view('profile.siapa_aku');
    }

<<<<<<< HEAD
    public function tulisArtikel(){
        $categories = Category::all();
        return view('profile.tulis_artikel', compact('categories'));
=======
    public function artikel(){
        return view('artikelpage');
>>>>>>> babfb93dbe8a077cf93de563663ebd12e5a7fe53
    }
}
