@extends('layouts')

@section('judul')
    Holaa, {{ auth()->user()->name }}
@endsection

@section('content')
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="assets/images/dino.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <h4>Hai, {{auth()->user()->name}}</h4>
                      <p>Anda login sebagai {{auth()->user()->role}}</p>
                      <div class="main-border-button">
                        <a href="/logout">Logout Disini</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Tambah Artikel <span><a href="#">Here</a></span></li>
                      <li>Daftar User <span><a href="#">Here</a></span></li>
                      <li>Kelola Akun <span><a href="#">Here</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
  @endsection