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

    public function detail($id)
    {
        $detail = Article::findOrFail($id);
        $penulis = Article::findOrFail($id)->penulis;
        $kategori = Article::findOrFail($id)->category;
        return view('detail', compact('detail', 'penulis', 'kategori'));
    }

    public function edit($id)
    {
        $detail = Article::findOrFail($id);
        $penulis = Article::findOrFail($id)->penulis;
        $kategori = Article::findOrFail($id)->category;
        return view('editArtikel', compact('detail', 'penulis', 'kategori'));
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);

        try {
            $article->delete();
            return redirect('/artikel')->with('success', 'Artikel berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Error deleting article:', ['id' => $id, 'message' => $e->getMessage()]);
            return redirect('/artikel')->with('error', 'Gagal menghapus artikel.');
        }
    }
}
