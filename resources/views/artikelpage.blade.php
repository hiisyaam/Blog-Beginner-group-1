@extends('layouts')

@section('judul', 'Rekomendasi Artikel Hari Ini')

@section('content')
<div class="live-stream">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4 class="text-light">Rekomendasi Artikel Hari Ini</h4>
        </div>
    </div>
    <div class="row">
        @foreach ($artikel as $a)
        <div class="col-lg-3 col-sm-6">
            <div class="item">
                <div class="thumb">
                    <img src="{{$a->image}}" alt="Placeholder Image">
                    <div class="hover-effect">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <div class="down-content">
                    <h4>{{$a->title}}</h4>
                    <p style="text-align: justify">{{$a->full_text}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
