<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function getIndex() {
        if (guardCustomer()->check()) {
            return view('frontend.customer.dashboard');
        }

        return redirect(url('customer/login'));
    }
}
