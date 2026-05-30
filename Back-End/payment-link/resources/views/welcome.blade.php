<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gtechs - Secure Payment</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://gtechs.in/assets/images/logos/logo-rounded.png" type="image/x-icon">

    <meta property="og:image" content="https://gtechs.in/assets/images/logos/logo-rounded.png">

    <meta property="og:url" content="https://gtechs.in">

    <meta name="author" content="Gtechs (Gautam Technologies)">


    <meta property="og:title"
        content="Gtechs - Leading Software Development Company in Noida | Web, App, SEO & Digital Marketing Services">

    <meta property="og:description"
        content="Gtechs is a leading software development company in Noida, offering top-notch web development, app development, SEO, and digital marketing services to businesses across India. Contact us for innovative tech solutions!">


    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 via-white to-gray-100 min-h-screen flex items-center justify-center p-7">

    <div class="bg-white/80 backdrop-blur-lg shadow-xl rounded-3xl p-8 w-full max-w-lg border border-gray-200">

        <!-- Header -->
        <div class="text-center mb-6">
            <h1 class="text-4xl font-extrabold text-blue-600 tracking-tight">Gtechs</h1>
            <p class="text-gray-500 text-sm mt-1">Fast • Secure • Reliable Payments</p>
        </div>

        <!-- Business Info -->
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 mb-6">
            <p class="text-sm text-gray-700"><strong>Terms & Conditions:</strong> By completing this payment, you agree to share your information with Gtechs (Gautam Technologies) and the selected payment gateway, in accordance with applicable laws and their privacy policies.</p>
            <p class="text-sm text-gray-700 mt-1"><strong>Support:</strong> thegtechs@gmail.com</p>
        </div>

        <h2 class="text-lg font-semibold text-center mb-4">Select Payment Method</h2>

        <form class="space-y-3" onsubmit="handleSubmit(event)">

            <!-- Payment Options -->
            <label
                class="flex items-center justify-between border rounded-xl p-4 cursor-pointer hover:bg-blue-50 hover:scale-[1.01] transition">
                <div class="flex items-center gap-3">
                    <input type="radio" name="payment" value="razorpay" class="accent-blue-600" checked />
                    <span class="font-medium">Razorpay</span>
                </div>
                <span class="text-xs text-green-600 font-semibold">Recommended</span>
            </label>

            <label
                class="flex items-center justify-between border rounded-xl p-4 cursor-pointer hover:bg-blue-50 transition">
                <div class="flex items-center gap-3">
                    <input type="radio" name="payment" value="cashfree" class="accent-blue-600" />
                    <span class="font-medium">Cashfree</span>
                </div>
            </label>

            <label
                class="flex items-center justify-between border rounded-xl p-4 cursor-pointer hover:bg-blue-50 transition">
                <div class="flex items-center gap-3">
                    <input type="radio" name="payment" value="phonePe" class="accent-blue-600" />
                    <span class="font-medium">PhonePe</span>
                </div>
            </label>

            <label
                class="flex items-center justify-between border rounded-xl p-4 cursor-pointer hover:bg-blue-50 transition">
                <div class="flex items-center gap-3">
                    <input type="radio" name="payment" value="payu" class="accent-blue-600" />
                    <span class="font-medium">PayU</span>
                </div>
            </label>

            <label
                class="flex items-center justify-between border rounded-xl p-4 cursor-pointer hover:bg-blue-50 transition">
                <div class="flex items-center gap-3">
                    <input type="radio" name="payment" value="upi" class="accent-blue-600" />
                    <span class="font-medium">Bank Account Details & UPI</span>
                </div>
                <span class="text-xs text-gray-500">India</span>
            </label>

            <!-- CTA Button -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 rounded-xl font-semibold hover:opacity-90 transition shadow-md">
                Continue to Secure Payment →
            </button>

        </form>


        <!-- Trust Badges -->
        <div class="flex justify-center gap-4 mt-6 text-xs text-gray-500">
            <span>🔒 SSL Secured</span>
            <span>⚡ Instant Processing</span>
            <span>✔ Verified Business</span>
        </div>

        <!-- Footer -->
        <p class="text-center text-xs text-gray-400 mt-6">© 2026 Gtechs. All rights reserved.</p>

    </div>

    <script>
        function handleSubmit(e) {
            e.preventDefault();

            const selected = document.querySelector('input[name="payment"]:checked');

            if (!selected) {
                alert('Please select a payment method');
                return;
            }

            const method = selected.value;

            // Redirect based on selection
            switch (method) {
                case 'razorpay':
                    window.location.href = '/pay/razorpay';
                    break;
                case 'cashfree':
                    window.location.href = '/pay/cashfree';
                    break;
                case 'phonePe':
                    window.location.href = '/pay/phonepe';
                    break;
                case 'payu':
                    window.location.href = '/pay/payu';
                    break;
                case 'upi':
                    window.location.href = 'https://gtechs.in/terms-of-payment';
                    break;
                default:
                    window.location.href = window.location.href;
            }
        }
    </script>
</body>

</html>
