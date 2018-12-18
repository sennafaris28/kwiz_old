@extends('layouts.app')

<title>My Profile</title>

@section('content')

    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">H e l l o</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert"> {{ session('status') }} </div>
                      @endif
                      <br>
                      Login berhasil !
                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
