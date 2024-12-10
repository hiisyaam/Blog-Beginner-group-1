@extends('layouts')

@section('judul', 'Detail Artikel')

@section('content')
<article>
    <h1 class="mt-3" style="margin-bottom : 10px">{{ $detail->title }}</h1>
    <img src="data:image/png;base64,{{ base64_encode($detail->image) }}" alt="Image" style="width: 1000px; height: 550px; border-radius: 10px;">
    <p>Ditulis Oleh: <span style="color: #ec6090;">{{ $penulis->name }}</span></p>
    <p>Kategori: <span style="color: #ec6090;">{{ $kategori->name }}</span></p>
    
    <div style="text-align: justify;">
        @foreach(explode("\n", $detail->full_text) as $paragraph)
            <p style="margin-bottom: 20px;">{{ $paragraph }}</p>
        @endforeach
    </div>
    
</article>

<h4>Tags</h4>
<p><span style="color: #ec6090;">#lorem ipsum</span></p>

@if (Auth::check())
<div class="text-end mt-4">
<<<<<<< HEAD
    <a href="/artikel/edit/{{$detail->id}}" class="btn btn-primary btn-sm">Edit</a>
    <a href="/artikel/delete/{{$detail->id}}" class="btn btn-danger btn-sm">Delete</a>
=======
    <a href="/artikel/{{ $detail->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
    <a href="/artikel/delete/{{ $detail->id }}" class="btn btn-danger btn-sm">Delete</a>
>>>>>>> 5c5e591378b08e70af4315ebd3fc4872f226969d
</div>
@endif
@endsection
