<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show() {
        return view('payment');
    }
}
// /[0-3][0-9][.][0-1][0-9][.][1-2][0,9][0,9][0-9]/gm