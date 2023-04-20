@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row mb-3"></div>
        <div class="row mb-3"></div>
        <div class="row mb-3"></div>
        <div class="row mb-3"></div>
        <div class="row mb-3"></div>
        <div class="row mb-3"></div>
    
        <center>     <form style=" width:656px" method="POST" action="{{ route('session') }}">
                   <div class="card justify-content-center" style="height:256; width:556px"> 
                <div class="row mb-3 justify-content-center"></div>
              <div class="card-body justify-content-center">
                        <div class="row mb-3">
                            <div class="col-md-4"></div>
                              
                  <center> <div class="col-md-4 "><img src="{{ asset('image/Club.png') }}"
                 style="height:556; width:256px "> <img src="{{ asset('image/Club.png') }}"
                 style="height:556; width:256px "></div>
                       
                        <div class="row mb-3"></div>
                        <div class="row mb-3"></div>
                    <form  method="POST" action="{{ route('session') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 ">
                            <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="btn btn-dark ">
                                    {{ __('Iniciar Sesion') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
