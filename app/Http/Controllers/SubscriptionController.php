<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SubscriptionController extends Controller
{
    public function pricing()
    {
        $plans = Config::get('stripe.plans');

        return view('subscription.pricing', compact('plans'));
    }

    public function subscribe(Request $request, string $plan)
    {
        $plans = Config::get('stripe.plans');

        if (! isset($plans[$plan])) {
            abort(404, 'プランが見つかりません。');
        }

        $priceId = $plans[$plan]['price_id'];

        if (! $priceId) {
            abort(500, 'Stripe Price IDが設定されていません。');
        }

        $user = $request->user();

        return $user->newSubscription('default', $priceId)
            ->checkout([
                'success_url' => route('home') . '?checkout=success',
                'cancel_url' => route('pricing') . '?checkout=cancel',
            ]);
    }

    public function billing(Request $request)
    {
        return $request->user()->redirectToBillingPortal(route('home'));
    }
}
