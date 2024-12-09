{{-- @extends('layouts')

@section('title', 'Rekomendasi Artikel')

@section('content')
<div class="live-stream">
    <!-- Heading Section -->
    <div class="col-lg-12">
        <div class="heading-section text-center mb-4">
            <h4 class="text-light">Rekomendasi Artikel Hari Ini</h4>
        </div>
    </div>

    <!-- Artikel Grid -->
    <div class="row">
        @foreach($articles as $article)
        <div class="col-lg-3 col-sm-6">
            <div class="item">
                <!-- Gambar Artikel -->
                <div class="thumb">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-100">
                    <!-- Hover Effect -->
                    <div class="hover-effect">
                        <div class="live">
                            <a href="#">Live</a>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-eye"></i> {{ $article->views }}</a></li>
                            <li><a href="#"><i class="fa fa-tags"></i> {{ $article->category }}</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Konten Artikel -->
                <div class="down-content">
                    <div class="d-flex align-items-center">
                        <div class="avatar">
                            <img src="{{ asset('storage/' . $article->author_avatar) }}" alt="{{ $article->author }}" style="max-width: 46px; border-radius: 50%;">
                        </div>
                        <div>
                            <span><i class="fa fa-check"></i> {{ $article->author }}</span>
                        </div>
                    </div>
                    <h4 class="text-light">{{ $article->title }}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="col-lg-12">
        <div class="main-button">
            {{ $articles->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection --}}

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
