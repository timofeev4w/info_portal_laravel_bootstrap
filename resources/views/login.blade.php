@extends('layouts.main_layout')

@section('css')

@endsection


@section('content')

<div class="row py-5">
    <div class="col-12 col-md-6 offset-md-3">
        <div class="row mb-3">
            <h2 class="fw-bold text-center">
                Вход
            </h2>
        </div>
        
        <form method="POST" action="login" class="row g-3 needs-validation" novalidate>
            @csrf
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
            <div class="text-danger mt-0">
                @error('email')
                  {{ $message }}
                @enderror
            </div>
            
            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" value="{{ old('password') }}">
            <div class="text-danger mt-0">
                @error('password')
                  {{ $message }}
                @enderror
            </div>

            <div class="text-danger mt-0">
                @if (isset($noLogin))
                    {{ $noLogin }}
                @endif
            </div>
            

            <button class="btn btn-success btn-send-user-data" type="submit">Войти</button>
        </form>
    </div>
</div>

@endsection

@section('js')

{{-- <script src="{{ asset('/js/index.js') }}"></script> --}}

@endsection