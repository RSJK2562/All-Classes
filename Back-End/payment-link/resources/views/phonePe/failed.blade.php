<div class="text-center py-16">
    <div class="text-red-500 text-6xl mb-4">✗</div>
    <h1 class="text-2xl font-bold text-gray-800">Payment Failed</h1>
    <p class="text-gray-500 mt-2">{{ session('error', 'Something went wrong.') }}</p>
    <a href="{{ route('payment.index') }}"
        class="mt-6 inline-block px-6 py-3 bg-brand-500 text-white rounded-xl font-semibold">
        Try Again
    </a>
</div>
