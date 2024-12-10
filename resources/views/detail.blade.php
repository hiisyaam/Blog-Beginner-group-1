@extends('layouts')

@section('judul', 'Detail Artikel')

@section('content')
<article>
    <img src="data:image/png;base64,{{base64_encode($detail->image)}}" alt="Image" style="width: 600px; height: 400px; border-radius: 10px;">
    <h2 class="mt-3">{{$detail->title}}</h2>
    <p>Ditulis Oleh : <span style="color: #ec6090;">{{$penulis->name}}</span></p>
    <p>Kategori     : <span style="color: #ec6090;">{{$kategori->name}}</span></p>
    <p>{{$detail->full_text}}</p>
</article>

<h4>Tags</h4>
<p><span style="color: #ec6090;">smnd</span></p>

@if (Auth::check())
<div class="text-end mt-4">
    <a href="/artikel/{{$detail->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
    <a href="/artikel/delete/{{$detail->id}}" class="btn btn-danger btn-sm">Delete</a>
</div>
@endif
@endsection