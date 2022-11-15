@extends('layouts.main_layout')

@section('css')

@endsection


@section('content')

<div class="row">
    <div class="col-12 col-md-5">
        <div class="row">
            <h5 class="fw-bold text-center">
                Поиск по базе данных судебных приставов
            </h5>
        </div>
        
        <form method="POST" action="/" class="row g-3 needs-validation" novalidate>
            @csrf
            <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Имя" value="{{ old('first-name') }}">
            <div class="text-danger mt-0">
                @error('first-name')
                  {{ $message }}
                @enderror
            </div>
            
            <input type="text" class="form-control" id="second-name" name="second-name" placeholder="Фамилия" value="{{ old('second-name') }}">
            <div class="text-danger mt-0">
                @error('second-name')
                  {{ $message }}
                @enderror
            </div>

            <input type="text" class="form-control" id="birth-date" name="birth-date" placeholder="Дата рождения в формате: 06.04.1972" value="{{ old('birth-date') }}">
            <small class="text-secondary mt-0">06.04.1972</small>
            <div class="text-danger mt-0">
                @error('birth-date')
                  {{ $message }}
                @enderror
            </div>

            {{-- <input type="date" class="form-control" id="birth-date" name="birth-date" placeholder="dd-mm-yyyy"> --}}
            <input type="tel" class="form-control" id="phone-number" name="phone-number" placeholder="Телефон в формате: 89052446424" value="{{ old('phone-number') }}">
            <small class="text-secondary mt-0">89052446424</small>
            <div class="text-danger mt-0">
                @error('phone-number')
                  {{ $message }}
                @enderror
            </div>

            <button class="btn btn-success btn-send-user-data" type="submit">Начать поиск</button>
        </form>
    </div>
    <div class="col-12 col-md-7 pt-5">
        <div class="row h5 fw-bold text-primary">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                Поиск по всем актуальным базам данных
            </div>
        </div>
        <hr>

        <div class="row h5 fw-bold text-primary">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                </svg>
                Поиск новых штрафов
            </div>
        </div>
        <hr>

        <div class="row h5 fw-bold text-primary">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                </svg>
                Безопасные платежи
                <img src="{{ asset('/img/payments/mobile-logos-final.webp') }}" alt="" srcset="">
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="row pt-5">
    <div class="col">
        <h3 class="blue">
            Единый отчет для граждан России
        </h3>

        <p>
            Наш сервис дает возможность гражданам Российской Федерации запрашивать из актуальных баз данных информацию об имеющихся у них задолженностях перед государственными органами.
        </p>
        <p>
            Портал позволяет своевременно получать информацию об имеющихся исполнительных производствах в отношении физического или юридического лица в базе Федеральной Службы Судебных Приставов. Информацию об имеющихся, не оплаченных штрафов ГИБДД.
        </p>
    </div>
</div>

@endsection

@section('js')

<script src="{{ asset('/js/index.js') }}"></script>

@endsection