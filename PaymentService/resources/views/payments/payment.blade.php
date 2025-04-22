<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Cafe Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-coffee-500 py-4 px-6">
                <h1 class="text-2xl font-bold text-white">Payment Method</h1>
            </div>
            
            <div class="p-6">
                <div class="mb-6">
                    <h2 class="text-lg font-semibold mb-2">Order Summary</h2>
                    <p class="text-gray-600">Order ID: {{ $order->id }}</p>
                    <p class="text-gray-600">Total Amount: Rp {{ number_format($payment->amount, 0, ',', '.') }}</p>
                </div>
                
                <form id="paymentForm" action="{{ route('payment.confirm', ['order_id' => $order->id]) }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold mb-4">Select Payment Method</h2>
                        
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input type="radio" id="gopay" name="payment_method" value="gopay" class="h-4 w-4 text-coffee-600 focus:ring-coffee-500" checked>
                                <label for="gopay" class="ml-3 block text-gray-700">
                                    <span class="font-medium">GoPay</span>
                                    <img src="https://via.placeholder.com/80x30?text=GoPay" alt="GoPay" class="h-6 ml-2 inline">
                                </label>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="radio" id="ovo" name="payment_method" value="ovo" class="h-4 w-4 text-coffee-600 focus:ring-coffee-500">
                                <label for="ovo" class="ml-3 block text-gray-700">
                                    <span class="font-medium">OVO</span>
                                    <img src="https://via.placeholder.com/80x30?text=OVO" alt="OVO" class="h-6 ml-2 inline">
                                </label>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="radio" id="bankTransfer" name="payment_method" value="bank_transfer" class="h-4 w-4 text-coffee-600 focus:ring-coffee-500">
                                <label for="bankTransfer" class="ml-3 block text-gray-700">
                                    <span class="font-medium">Bank Transfer</span>
                                </label>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="radio" id="cash" name="payment_method" value="cash" class="h-4 w-4 text-coffee-600 focus:ring-coffee-500">
                                <label for="cash" class="ml-3 block text-gray-700">
                                    <span class="font-medium">Cash on Delivery</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <button type="submit" class="w-full bg-coffee-600 hover:bg-coffee-700 text-white font-bold py-3 px-4 rounded-md transition duration-300">
                            Confirm Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>