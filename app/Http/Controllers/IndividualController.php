<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndividualController extends Controller
{
    public function redirectToPayment(Request $request) {
        $validated = $request->validate([
            'first-name' => 'required|min:2|max:63',
            'second-name' => 'required|min:2|max:63',
            'birth-date' => 'required|regex:/^[0-3][0-9][.][0-1][0-9][.][1-2][0,9][0,9][0-9]$/',
            'phone-number' => 'required|numeric|digits:11',
        ]);


        return redirect('/payment');
    }
}
