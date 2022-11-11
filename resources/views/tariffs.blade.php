@extends('layouts.main_layout')

@section('content')
    <div class="row text-center">
        <h3>
            Тарифы
        </h3>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Цена</th>
                        <th scope="col">Доступ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>99 руб.</td>
                        <td>на неделю</td>
                    </tr>
                    <tr>
                        <td>399 руб.</td>
                        <td>на месяц</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection