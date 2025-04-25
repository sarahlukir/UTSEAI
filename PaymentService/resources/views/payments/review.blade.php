<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Review - Cafe Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-coffee-500 {
    background-color: #6F4E37;
}

.bg-coffee-600 {
    background-color: #5D4037;
}

.bg-coffee-700 {
    background-color: #4E342E;
}

.text-coffee-500 {
    color: #6F4E37;
}

.text-coffee-600 {
    color: #5D4037;
}

.text-coffee-700 {
    color: #4E342E;
}

.border-coffee-500 {
    border-color: #6F4E37;
}

.hover\:bg-coffee-700:hover {
    background-color: #4E342E;
}
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-green-500 py-4 px-6">
                <h1 class="text-2xl font-bold text-white">Payment Successful!</h1>
            </div>
            
            <div class="p-6">
                <div class="mb-6 text-center">
                    <svg class="h-16 w-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <h2 class="text-xl font-semibold mb-2">Thank you for your order!</h2>
                    <p class="text-gray-600">Your payment has been processed successfully.</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2 border-b pb-2">Order Details</h3>
                    <p class="text-gray-600"><span class="font-medium">Order ID:</span> {{ $order->id }}</p>
                    <p class="text-gray-600"><span class="font-medium">Payment Method:</span> {{ ucfirst(str_replace('_', ' ', $payment->payment_method)) }}</p>
                    <p class="text-gray-600"><span class="font-medium">Amount Paid:</span> Rp {{ number_format($payment->amount, 0, ',', '.') }}</p>
                    <p class="text-gray-600"><span class="font-medium">Transaction ID:</span> {{ $payment->transaction_id }}</p>
                </div>
                
                <div class="mt-8 text-center">
                    <p class="text-gray-600 mb-4">We appreciate your business. Enjoy your coffee!</p>
                    <a href="http://localhost:8000/" class="inline-block bg-coffee-600 hover:bg-coffee-700 text-white font-bold py-2 px-6 rounded-md transition duration-300">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>