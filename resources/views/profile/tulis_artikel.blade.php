@extends('layouts')
@section('judul','Mari Mulai Menulis')

@section('content')
<style>


label {
    display: block;
    color: #e75e8d;
}

input[type="text"],
select,
textarea,
input[type="file"] {
    width: 100%;
    padding: 10px;
    border: 0.2px solid #4d4d4d;
    border-radius: 4px;
    background-color: transparent;
    color: #fff;
}
option{
    color: #000;
}
textarea {
    resize: vertical;
}
</style>
    <h1 class="text-center">Mari Tulis Artikel</h1>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
        <script>
           setTimeout(function() {
                window.location.reload();
            }, 2000);
        </script>
    </div>
    @endif
    <form action="/saveArtikel" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <label for="judul">Judul Artikel</label>
        <input type="text" id="judul" name="title" required>
    </div>
    <div class="form-group mb-3">
        <label for="judul">Kategori</label>
        <select name="category_id" id="kategori">
            <option value=""></option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="isi">Isi Artikel</label>
        <textarea id="isi" name="full_text" rows="10" required></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="gambar">Upload Gambar</label>
        <input type="file" id="gambar" name="image" accept="image/*" required>
    </div>
    <input type="hidden" name="created_at" value="<?= date('Y-m-d H:i:s'); ?>">
    <div class="text-end">
        <button type="submit" class="btn btn-outline-light">Simpan</button>
    </div>
    </form>

@endsection
