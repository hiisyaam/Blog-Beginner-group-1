<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

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

    public function tulisArtikel(){
        $categories = Category::all();
        return view('profile.tulis_artikel', compact('categories'));
    }
    public function artikel(){
        $artikel = Article::all();
        foreach ($artikel as $article) {
            if ($article->image) {
                $article->image = 'data:image/jpeg;base64,' . base64_encode($article->image);
            }
        }
        return view('artikelpage', compact('artikel'));

    }
}
