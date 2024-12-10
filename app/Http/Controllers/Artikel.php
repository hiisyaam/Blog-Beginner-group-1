<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Artikel extends Controller
{

    public function save(Request $request)
    {
        Log::info('Request Data:', $request->all());

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'full_text' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        Log::info('Validated Data:', $validatedData);

        $imageBinary = file_get_contents($request->file('image')->getRealPath());

        Log::info('Image binary length:', [strlen($imageBinary)]);

        Article::create([
            'title' => $validatedData['title'],
            'category_id' => $validatedData['category_id'],
            'full_text' => $validatedData['full_text'],
            'image' => $imageBinary,
            'user_id' => auth()->id(),
        ]);

        return redirect('/tulisArtikel')->with('success', 'Artikel berhasil ditambahkan.');
    }

}
