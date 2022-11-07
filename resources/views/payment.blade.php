@extends('layouts.main_layout')

@section('css')

@endsection


@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h1 class="text-success d-none info-success">
            Информация найдена!
        </h1>

        <div class="info-progress">
            <h1>
                Поиск информации...
            </h1>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
        </div>
    </div>
    <div>
        
    </div>
</div>

@endsection

@section('js')

<script src="{{ asset('/js/payment.js') }}"></script>

@endsection