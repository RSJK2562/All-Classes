<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen p-4">

    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl p-8 text-center border border-gray-100">

        <div class="mb-6 flex justify-center">
            <div class="bg-green-100 p-4 rounded-full">
                <svg class="w-16 h-16 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
        </div>

        <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Payment Successful!</h2>
        <p class="text-gray-500 mb-6">Thank you for your purchase. Your transaction was completed successfully.</p>

        <div class="bg-gray-50 rounded-lg p-4 mb-8 flex flex-col items-center border border-dashed border-gray-300">
            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Order ID</span>
            <span class="text-lg font-mono font-bold text-gray-800">{{ $order_id }}</span>
        </div>

        <div class="space-y-3">
            <a href="/"
                class="block w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-xl transition duration-200 shadow-lg shadow-indigo-200">
                Back to Home
            </a>
            <p class="text-sm text-gray-400">
                A confirmation email has been sent to your inbox.
            </p>
        </div>

    </div>

</body>

</html>
