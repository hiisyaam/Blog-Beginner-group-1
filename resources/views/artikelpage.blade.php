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
        @for ($i = 1; $i <= 12; $i++)
        <div class="col-lg-3 col-sm-6">
            <div class="item">
                <div class="thumb">
                    <img src="https://via.placeholder.com/300x200" alt="Placeholder Image">
                    <div class="hover-effect">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <div class="down-content">
                    <h4>Artikel {{ $i }}</h4>
                    <p style="text-align: center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita reiciendis culpa mollitia?</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
