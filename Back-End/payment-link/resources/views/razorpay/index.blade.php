<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gtechs – Secure Payment by Razorpay</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://gtechs.in/assets/images/logos/logo-rounded.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@300;400;600;700&display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        display: ['Sora', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eef5ff',
                            100: '#d9e9ff',
                            500: '#1a56db',
                            600: '#1447c0',
                            700: '#0f3a9e',
                        },
                        surface: '#f4f7fb',
                    },
                    boxShadow: {
                        card: '0 4px 32px 0 rgba(20,71,192,0.09)',
                        glow: '0 0 0 4px rgba(26,86,219,0.18)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: #f4f7fb;
        }

        /* animated gradient bar */
        .hero-bar {
            background: linear-gradient(90deg, #1a56db, #3b82f6, #0f3a9e, #1a56db);
            background-size: 300% 100%;
            animation: shimmer 4s linear infinite;
        }

        @keyframes shimmer {
            to {
                background-position: -300% center;
            }
        }


        /* input focus ring */
        .inp:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 86, 219, 0.18);
            border-color: #1a56db;
        }

        /* pay button pulse */
        .pay-btn {
            transition: transform .15s, box-shadow .15s;
        }

        .pay-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px 0 rgba(26, 86, 219, 0.35);
        }

        .pay-btn:active {
            transform: scale(.98);
        }

        /* badge shimmer */
        .secure-badge {
            animation: fadeIn .6s ease both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(6px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        /* amount highlight */
        .amount-display {
            transition: color .3s;
        }
    </style>
</head>

<body class="min-h-screen font-sans text-gray-800">

    <!-- Top bar -->
    <div class="hero-bar h-1 w-full"></div>

    <!-- Header -->
    <header class="bg-white border-b border-gray-100 sticky top-0 z-30">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-3 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-brand-500 flex items-center justify-center shadow-md">
                    <span class="text-white font-display font-bold text-base">GT</span>
                </div>
                <div>
                    <p class="font-display font-bold text-gray-900 leading-tight text-sm sm:text-base">Gtechs</p>
                    <p class="text-xs text-gray-400 font-medium">Gautam Technologies</p>
                </div>
            </div>
            <div
                class="flex items-center gap-1.5 text-xs text-green-600 font-semibold bg-green-50 border border-green-200 px-3 py-1.5 rounded-full">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd" />
                </svg>
                Secure Payment
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 py-8 lg:py-12 grid grid-cols-1 lg:grid-cols-5 gap-8">

        <!-- LEFT: Business Info -->
        <aside class="lg:col-span-2 space-y-6">

            <!-- About card -->
            <div class="bg-white rounded-2xl shadow-card p-6 border border-gray-100">
                <h2 class="font-display font-bold text-xl text-gray-900 mb-1">Gtechs (Gautam Technologies)</h2>
                <div class="w-10 h-1 bg-brand-500 rounded-full mb-4"></div>
                <p class="text-sm text-gray-500 leading-relaxed">
                    A technology solutions company providing <strong class="text-gray-700">website development</strong>,
                    software development, ERP/CRM solutions, mobile applications, and digital services for businesses
                    and individuals across India.
                </p>
            </div>

            <!-- Contact card -->
            <div class="bg-white rounded-2xl shadow-card p-6 border border-gray-100">
                <h3 class="font-semibold text-gray-800 mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact Us
                </h3>
                <div class="space-y-3 text-sm">
                    <a href="mailto:thegtechs@gmail.com"
                        class="flex items-center gap-3 text-gray-600 hover:text-brand-500 transition-colors group">
                        <div
                            class="w-8 h-8 rounded-lg bg-brand-50 flex items-center justify-center group-hover:bg-brand-100 transition-colors">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        thegtechs@gmail.com
                    </a>
                    <a href="tel:+917521878485"
                        class="flex items-center gap-3 text-gray-600 hover:text-brand-500 transition-colors group">
                        <div
                            class="w-8 h-8 rounded-lg bg-brand-50 flex items-center justify-center group-hover:bg-brand-100 transition-colors">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        +91 7521878485
                    </a>
                </div>
            </div>

            <!-- Terms card -->
            <div class="bg-white rounded-2xl shadow-card p-6 border border-gray-100">
                <h3 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Terms & Conditions
                </h3>
                <p class="text-xs text-gray-500 leading-relaxed">
                    By completing this payment, you agree to share your information with <strong
                        class="text-gray-700">Gtechs (Gautam Technologies)</strong> and the selected payment gateway, in
                    accordance with applicable laws and their privacy policies.
                </p>
            </div>

            <!-- Trust badges -->
            <div class="bg-gradient-to-br from-brand-50 to-blue-50 rounded-2xl border border-brand-100 p-5">
                <p class="text-xs font-semibold text-brand-600 uppercase tracking-widest mb-3">Why Pay Securely With Us
                </p>
                <div class="space-y-2.5">
                    <div class="flex items-center gap-2.5 text-xs text-gray-600">
                        <div class="w-5 h-5 rounded-full bg-brand-500 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        256-bit SSL encrypted transactions
                    </div>
                    <div class="flex items-center gap-2.5 text-xs text-gray-600">
                        <div class="w-5 h-5 rounded-full bg-brand-500 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        Multiple RBI-approved gateways
                    </div>
                    <div class="flex items-center gap-2.5 text-xs text-gray-600">
                        <div class="w-5 h-5 rounded-full bg-brand-500 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        Instant payment confirmation
                    </div>
                </div>
            </div>
        </aside>

        <!-- RIGHT: Payment Form -->
        <section class="lg:col-span-3">
            <div class="bg-white rounded-2xl shadow-card border border-gray-100 overflow-hidden">

                <!-- Form header -->
                <div class="px-6 sm:px-8 pt-8 pb-6 border-b border-gray-100">
                    <h1 class="font-display font-bold text-2xl text-gray-900">Payment Details</h1>
                    <div class="w-10 h-1 bg-brand-500 rounded-full mt-2"></div>
                </div>

                <form id="paymentForm" onsubmit="initiatePayment(event)" novalidate
                    class="px-6 sm:px-8 py-7 space-y-6">

                    <!-- Amount -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                            Amount <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold text-lg">₹</span>
                            <input id="amount" type="number" min="1" placeholder="0.00"
                                class="inp w-full pl-9 pr-4 py-3 border border-gray-200 rounded-xl text-lg font-bold text-gray-900 bg-gray-50 placeholder-gray-300 transition-all"
                                oninput="updateAmount(this.value)" />
                        </div>
                    </div>

                    <!-- Customer Name & Email -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Customer Name <span
                                    class="text-red-500">*</span></label>
                            <input id="cname" type="text" placeholder="Full Name"
                                class="inp w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50 placeholder-gray-300 transition-all text-sm" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Email <span
                                    class="text-red-500">*</span></label>
                            <input id="email" type="email" placeholder="you@example.com"
                                class="inp w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50 placeholder-gray-300 transition-all text-sm" />
                        </div>
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Phone <span
                                class="text-red-500">*</span></label>
                        <div class="flex gap-2">
                            <div
                                class="px-4 py-3 border border-gray-200 rounded-xl bg-gray-50 text-sm font-semibold text-gray-500 whitespace-nowrap">
                                🇮🇳 +91</div>
                            <input id="phone" type="tel" placeholder="10-digit mobile number"
                                class="inp flex-1 px-4 py-3 border border-gray-200 rounded-xl bg-gray-50 placeholder-gray-300 transition-all text-sm" />
                        </div>
                    </div>

                    <!-- Purpose -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Purpose <span
                                class="text-red-500">*</span></label>
                        <select id="purpose"
                            class="inp w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50 text-sm text-gray-700 transition-all appearance-none cursor-pointer">
                            <option value="">-- Select Purpose --</option>
                            <option>Website Development</option>
                            <option>Software Development</option>
                            <option>Mobile App Development</option>
                            <option>ERP / CRM Solution</option>
                            <option>Digital Marketing</option>
                            <option>Consulting / Support</option>
                            <option>Domain & Hosting</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <!-- Note -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Note / Description</label>
                        <textarea id="note" rows="3" placeholder="Add any additional details or invoice reference..."
                            class="inp w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50 placeholder-gray-300 transition-all text-sm resize-none"></textarea>
                    </div>


                    <!-- Payment methods accepted -->
                    <div class="flex flex-wrap items-center gap-3 py-2">
                        <span class="text-xs text-gray-400 font-medium">Accepted:</span>
                        <!-- UPI -->
                        <span
                            class="px-3 py-1 rounded-lg bg-blue-50 border border-blue-100 text-xs font-bold text-blue-600">UPI</span>
                        <!-- Visa -->
                        <span class="px-3 py-1 rounded-lg bg-blue-900 text-xs font-bold text-white tracking-wide"
                            style="font-style:italic">VISA</span>
                        <!-- Mastercard -->
                        <span class="px-3 py-1 rounded-lg bg-gray-800 text-xs font-bold text-white">MC</span>
                        <!-- RuPay -->
                        <span
                            class="px-3 py-1 rounded-lg bg-orange-50 border border-orange-200 text-xs font-bold text-orange-600">RuPay</span>
                        <!-- Net Banking -->
                        <span class="px-3 py-1 rounded-lg bg-gray-100 text-xs font-medium text-gray-500">Net
                            Banking</span>
                        <!-- Wallets -->
                        <span class="px-3 py-1 rounded-lg bg-gray-100 text-xs font-medium text-gray-500">Wallets</span>
                    </div>

                    <!-- Pay button -->
                    <button type="submit"
                        class="pay-btn w-full bg-brand-500 hover:bg-brand-600 text-white font-display font-bold text-lg py-4 rounded-xl shadow-md flex items-center justify-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <span id="payBtnText">Pay ₹ 0.00</span>
                    </button>

                    <!-- Toast / Error message -->
                    <div id="toast"
                        class="hidden rounded-xl px-4 py-3 text-sm font-medium text-center transition-all"></div>

                </form>
            </div>

            <!-- Bottom disclaimer -->
            <div class="mt-4 text-center text-xs text-gray-400 secure-badge">
                🔒 Payments are processed by your selected gateway · Gtechs never stores card information
            </div>
        </section>

    </main>

    <!-- Success Modal -->
    <div id="successModal"
        class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-sm w-full p-8 text-center animate-bounce-in">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h2 class="font-display font-bold text-xl text-gray-900 mb-2">Payment Initiated!</h2>
            <p class="text-2xl font-bold text-brand-500 mb-4" id="modalAmt"></p>
            <p class="text-xs text-gray-400 mb-6">You will be redirected to the payment gateway to complete your
                transaction securely.</p>
            <button onclick="closeModal()"
                class="w-full bg-brand-500 text-white font-bold py-3 rounded-xl hover:bg-brand-600 transition-colors">Done</button>
        </div>
    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        function updateAmount(val) {
            const num = parseFloat(val) || 0;
            document.getElementById('payBtnText').textContent = `Pay ₹ ${num.toFixed(2)}`;
        }

        function showToast(msg, type = 'error') {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.className =
                `rounded-xl px-4 py-3 text-sm font-medium text-center ${type === 'error' ? 'bg-red-50 text-red-600 border border-red-200' : 'bg-green-50 text-green-600 border border-green-200'}`;
            t.classList.remove('hidden');
            setTimeout(() => t.classList.add('hidden'), 4000);
        }

        async function initiatePayment(e) {
            e.preventDefault();
            const amount = document.getElementById('amount').value;
            const name = document.getElementById('cname').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const purpose = document.getElementById('purpose').value;

            if (!amount || parseFloat(amount) <= 0) return showToast('Please enter a valid amount.');
            if (!name) return showToast('Please enter your name.');
            if (!email || !/\S+@\S+\.\S+/.test(email)) return showToast('Please enter a valid email address.');
            if (!phone || !/^\d{10}$/.test(phone)) return showToast('Please enter a valid 10-digit phone number.');
            if (!purpose) return showToast('Please select the purpose of payment.');

            if (!amount || !name || !email || !phone) {
                alert('Please fill all required fields');
                return;
            }

            // Step 1: Create Order
            let response = await fetch('/create-order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    amount
                })
            });

            let data = await response.json();

            // Step 2: Open Razorpay
            var options = {
                "key": "{{ config('razorpay.key') }}",
                "amount": data.amount,
                "currency": "INR",
                "name": "Gtechs (Gautam Technologies)",
                "description": "Payment",
                "order_id": data.order_id,

                "handler": async function(response) {

                    // Step 3: Verify Payment
                    let verify = await fetch('/verify-payment', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            order_id: response.razorpay_order_id,
                            payment_id: response.razorpay_payment_id,
                            signature: response.razorpay_signature
                        })
                    });

                    let result = await verify.json();

                    if (result.status === 'success') {
                        // alert('Payment Successful ✅');
                        // window.location.reload();
                        document.getElementById('modalAmt').textContent = `₹ ${parseFloat(amount).toFixed(2)}`;
                        document.getElementById('successModal').classList.remove('hidden');
                    } else {
                        alert('Payment Failed ❌');
                    }
                },

                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": phone
                },

                "theme": {
                    "color": "#3399cc"
                }
            };

            var rzp = new Razorpay(options);
            rzp.open();
        }

        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
            document.getElementById('paymentForm').reset();
            window.location.href = '/';
        }
    </script>
</body>

</html>
