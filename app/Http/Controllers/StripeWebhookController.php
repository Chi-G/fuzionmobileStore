<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Webhook;

class StripeWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $endpointSecret = config('services.stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent($payload, $sigHeader, $endpointSecret);
            if ($event->type === 'payment_intent.succeeded') {
                $paymentIntent = $event->data->object;
                $order = Order::where('payment_intent_id', $paymentIntent->id)->first();
                if ($order) {
                    $order->update(['status' => 'completed']);
                }
            }
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
