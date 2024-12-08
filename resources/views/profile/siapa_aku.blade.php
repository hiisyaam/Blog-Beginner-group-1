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
                    <img src="assets/images/profile.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <h4>{{auth()->user()->name}}</h4>
                      <p>Cita Citaku Menjadi Softex Agr ku bisa mengkokop</p>
                      <div class="main-border-button">
                        <a href="/logout">Logout Bae</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  @endsection