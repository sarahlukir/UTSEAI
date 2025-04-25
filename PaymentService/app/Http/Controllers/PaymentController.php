<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;



class PaymentController extends Controller
{
    // ==============================================
    // API ENDPOINTS (JSON RESPONSE)
    // ==============================================

    /**
     * Create Payment (API)
     * POST /api/payments
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|exists:orders,id',
            'amount' => 'required|numeric',
            'payment_method' => 'required|string|in:gopay,ovo,bank_transfer,cash',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $payment = Payment::create([
            'order_id' => $request->order_id,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'status' => 'pending',
        ]);

        return response()->json([
            'message' => 'Payment created successfully',
            'data' => $payment
        ], 201);
    }

    /**
     * Get Payment Details (API)
     * GET /api/payments/{id}
     */
    public function show(string $id)
    {
        $payment = Payment::find($id);
        
        if (!$payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }
        
        return response()->json([
            'data' => $payment
        ]);
    }

    /**
     * Update Payment (API)
     * PUT /api/payments/{id}
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'sometimes|string|in:pending,completed,failed',
            'transaction_id' => 'sometimes|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $payment = Payment::find($id);
        
        if (!$payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }

        $payment->update($request->all());
        
        return response()->json([
            'message' => 'Payment updated successfully',
            'data' => $payment
        ]);
    }

    /**
     * Confirm Payment (API)
     * POST /api/payments/{id}/confirm
     */
    public function confirmPayment(Request $request, string $id)
    {
        $payment = Payment::find($id);
        
        if (!$payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }

        $payment->update([
            'status' => 'completed',
            'transaction_id' => 'TRX-' . uniqid(),
        ]);
        
        return response()->json([
            'message' => 'Payment confirmed successfully',
            'data' => $payment,
            'redirect_url' => route('payment.review', ['order_id' => $payment->order_id])
        ]);
    }

    // ==============================================
    // WEB ENDPOINTS (HTML RESPONSE)
    // ==============================================

    /**
     * Show Payment Page (Web)
     * GET /payment/{order_id}
     */
    public function showPaymentPage($order_id): View
    {
        $order = Http::get("http://localhost:8002/api/orders/" . $order_id)->json();
        $payment = Payment::firstOrCreate(
            ['order_id' => $order['id']],
            ['amount' => $order['total_price'], 'payment_method' => 'gopay', 'status' => 'pending']
        );

        return view('payments.payment', compact('order', 'payment'));
    }

    /**
     * Process Payment Confirmation (Web)
     * POST /payment/{order_id}/confirm
     */
    public function processPayment(Request $request, $order_id)
    {
        $payment = Payment::where('order_id', $order_id)->firstOrFail();
        
        $payment->update([
            'payment_method' => $request->payment_method,
            'status' => 'completed',
            'transaction_id' => 'TRX-' . uniqid(),
        ]);

        return redirect()->route('payment.review', ['order_id' => $order_id]);
    }

    /**
     * Show Review Page (Web)
     * GET /review/{order_id}
     */
    public function showReviewPage($order_id): View
    {
        $response = Http::get("http://localhost:8002/api/orders/" . $order_id);
        $order = $response->object();
        $payment = Payment::where('order_id', $order_id)->firstOrFail();

        return view('payments.review', compact('order', 'payment'));
    }
}