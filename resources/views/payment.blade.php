@extends('layouts.main_layout')

@section('css')

@endsection


@section('content')

<div class="row">
    <div class="col-12 text-center">
        <div class="info-progress">
            <h1>
                Поиск информации...
            </h1>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
        </div>
        
        <div class="info-success d-none">
            <h1 class="text-success">
                Информация найдена!
            </h1>

            <div class="row">
                <div class="col-12 col-md-7">
                    Здесь виджет оплаты...
                </div>
                <div class="col-12 col-md-5 text-start text-secondary">
                    <a href="payment_methods" target="_blank" class="text-secondary">Платежи</a>
                    <br>
                    <a href="payment_security" target="_blank" class="text-secondary">Гарантии безопасности онлайн платежей</a>
                    <br>
                    <a href="goods_return" target="_blank" class="text-secondary">Возврат</a>
                    <br>
                    <a href="personal_policy" target="_blank" class="text-secondary">Политика обработки персональных данных</a>
                    <br>
                    <a href="docs/moidolgi_offer.pdf" target="_blank" class="text-secondary">Оферта</a>
                </div>
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