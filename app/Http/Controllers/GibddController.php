<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GibddController extends Controller
{
    public function redirectToPayment(Request $request) {
        $validated = $request->validate([
            'auto-number' => 'required|regex:/[А-Яа-яЁё][0-9]{3}[А-Яа-яЁё]{2}[0-9]{2,3}/u',
            'phone-number' => 'required|numeric|digits:11',
        ]);


        return redirect('/payment');
    }
}

// /^[А-Яа-я][0-9]{3}[А-Яа-я]{2}[0-9]{2,3}$/gm