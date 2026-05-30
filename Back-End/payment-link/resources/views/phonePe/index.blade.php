<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gtechs – Secure Payment by PhonePe</title>
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
                @if (session('error'))
                    <div
                        class="rounded-xl px-4 py-3 text-sm font-medium text-center bg-red-50 text-red-600 border border-red-200 mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('payment.initiate') }}" class="px-6 sm:px-8 py-7 space-y-6">
                    @csrf

                    {{-- Amount --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                            Amount <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold text-lg">₹</span>
                            <input id="amount" type="number" name="amount" min="1" placeholder="0.00"
                                value="{{ old('amount') }}"
                                class="inp w-full pl-9 pr-4 py-3 border border-gray-200 rounded-xl text-lg font-bold
                       text-gray-900 bg-gray-50 placeholder-gray-300 transition-all
                       @error('amount') border-red-400 @enderror"
                                oninput="updateAmount(this.value)" />
                        </div>
                        @error('amount')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Name & Email --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Customer Name <span class="text-red-500">*</span>
                            </label>
                            <input id="cname" type="text" name="cname" placeholder="Full Name"
                                value="{{ old('cname') }}"
                                class="inp w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50
                       placeholder-gray-300 transition-all text-sm
                       @error('cname') border-red-400 @enderror" />
                            @error('cname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input id="email" type="email" name="email" placeholder="you@example.com"
                                value="{{ old('email') }}"
                                class="inp w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50
                       placeholder-gray-300 transition-all text-sm
                       @error('email') border-red-400 @enderror" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                            Phone <span class="text-red-500">*</span>
                        </label>
                        <div class="flex gap-2">
                            <div
                                class="px-4 py-3 border border-gray-200 rounded-xl bg-gray-50
                        text-sm font-semibold text-gray-500 whitespace-nowrap">
                                🇮🇳 +91
                            </div>
                            <input id="phone" type="tel" name="phone" placeholder="10-digit mobile number"
                                value="{{ old('phone') }}" maxlength="10"
                                class="inp flex-1 px-4 py-3 border border-gray-200 rounded-xl bg-gray-50
                       placeholder-gray-300 transition-all text-sm
                       @error('phone') border-red-400 @enderror" />
                        </div>
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Purpose --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                            Purpose <span class="text-red-500">*</span>
                        </label>
                        <select id="purpose" name="purpose"
                            class="inp w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50
                   text-sm text-gray-700 transition-all appearance-none cursor-pointer
                   @error('purpose') border-red-400 @enderror">
                            <option value="">-- Select Purpose --</option>
                            @foreach (['Website Development', 'Software Development', 'Mobile App Development', 'ERP / CRM Solution', 'Digital Marketing', 'Consulting / Support', 'Domain & Hosting', 'Other'] as $opt)
                                <option {{ old('purpose') === $opt ? 'selected' : '' }}>{{ $opt }}</option>
                            @endforeach
                        </select>
                        @error('purpose')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Note --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Note / Description</label>
                        <textarea id="note" name="note" rows="3"
                            placeholder="Add any additional details or invoice reference..."
                            class="inp w-full px-4 py-3 border border-gray-200 rounded-xl bg-gray-50
                   placeholder-gray-300 transition-all text-sm resize-none">{{ old('note') }}</textarea>
                    </div>

                    {{-- Accepted Methods --}}
                    <div class="flex flex-wrap items-center gap-3 py-2">
                        <span class="text-xs text-gray-400 font-medium">Accepted:</span>
                        <span
                            class="px-3 py-1 rounded-lg bg-blue-50 border border-blue-100 text-xs font-bold text-blue-600">UPI</span>
                        <span
                            class="px-3 py-1 rounded-lg bg-blue-900 text-xs font-bold text-white tracking-wide italic">VISA</span>
                        <span class="px-3 py-1 rounded-lg bg-gray-800 text-xs font-bold text-white">MC</span>
                        <span
                            class="px-3 py-1 rounded-lg bg-orange-50 border border-orange-200 text-xs font-bold text-orange-600">RuPay</span>
                        <span class="px-3 py-1 rounded-lg bg-gray-100 text-xs font-medium text-gray-500">Net
                            Banking</span>
                        <span class="px-3 py-1 rounded-lg bg-gray-100 text-xs font-medium text-gray-500">Wallets</span>
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                        class="pay-btn w-full bg-brand-500 hover:bg-brand-600 text-white font-display font-bold text-lg py-4 rounded-xl shadow-md flex items-center justify-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <span id="payBtnText">Pay ₹ 0.00</span>
                    </button>
                </form>
            </div>

            <!-- Bottom disclaimer -->
            <div class="mt-4 text-center text-xs text-gray-400 secure-badge">
                🔒 Payments are processed by your selected gateway · Gtechs never stores card information
            </div>
        </section>

    </main>

    <script>
        function updateAmount(val) {
            const formatted = parseFloat(val) > 0 ? parseFloat(val).toFixed(2) : '0.00';
            document.getElementById('payBtnText').textContent = `Pay ₹ ${formatted}`;
        }
    </script>
</body>

</html>
