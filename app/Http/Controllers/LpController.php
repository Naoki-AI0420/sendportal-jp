<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;

class LpController extends Controller
{
    public function index()
    {
        $plans = Config::get('stripe.plans');

        return view('lp.index', compact('plans'));
    }
}
