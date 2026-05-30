<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - {{ $user->name }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- 🔥 THIS WAS MISSING --}}
    @vite(['resources/js/app.js'])
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl flex flex-col h-[600px]">

        <div class="bg-blue-500 text-white px-4 py-3 rounded-t-2xl flex items-center gap-3">
            <a href="{{ route('dashboard') }}" class="p-2 rounded-full hover:bg-blue-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>

            <h2 class="text-lg font-semibold capitalize">{{ $user->name }}</h2>
        </div>

        <div class="flex-1 p-4 overflow-y-auto space-y-3" id="chat-box">
            @foreach ($messages as $message)
                <div class="flex {{ $message->sender_id === auth()->id() ? 'justify-end' : 'justify-start' }}">
                    <div
                        class="px-4 py-2 rounded-2xl max-w-xs {{ $message->sender_id === auth()->id() ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-800' }}">
                        {{ $message->message }}
                        <span class="text-xs opacity-70">{{ $message->created_at->format('h:i A') }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <form method="POST" action="{{ route('chat.store') }}">
            @csrf
            <div class="border-t p-3 flex items-center gap-2">
                <input type="hidden" name="receiver_id" value="{{ $user->id }}">
                <input type="text" name="message" placeholder="Type a message..."
                    class="flex-1 px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400" />
                <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">
                    Send
                </button>
            </div>
        </form>

    </div>

    <script type="module">
        // document.addEventListener('DOMContentLoaded', () => {

        //     const userId = {{ auth()->id() }};

        //     if (!window.Echo) {
        //         console.error('Echo not loaded ❌');
        //         return;
        //     }

        //     console.log('Echo loaded ✅');

        //     window.Echo.private(`chat-channel.${userId}`)
        //         .listen('.MessageSent', (e) => {

        //             console.log('New message:', e.message);

        //             let isSender = e.message.sender_id == userId;

        //             let alignment = isSender ? 'justify-end' : 'justify-start';
        //             let bgColor = isSender ?
        //                 'bg-blue-500 text-white' :
        //                 'bg-gray-300 text-gray-800';

        //             let html = `
    //         <div class="flex ${alignment}">
    //             <div class="px-4 py-2 rounded-2xl max-w-xs ${bgColor}">
    //                 ${e.message.message}
    //                 <span class="text-xs opacity-70">
    //                     ${new Date(e.message.created_at).toLocaleTimeString()}
    //                 </span>
    //             </div>
    //         </div>
    //     `;

        //             document.getElementById('chat-box').innerHTML += html;
        //         });

        // });

        document.addEventListener('DOMContentLoaded', () => {

            const userId = {{ auth()->id() }};
            const chatBox = document.getElementById('chat-box');

            function scrollToBottom() {
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            if (!window.Echo) {
                console.error('Echo not loaded ❌');
                return;
            }

            console.log('Echo loaded ✅');

            // 👉 Page load pe bhi scroll bottom
            scrollToBottom();

            window.Echo.private(`chat-channel.${userId}`)
                .listen('.MessageSent', (e) => {

                    console.log('New message:', e.message);

                    let isSender = e.message.sender_id == userId;

                    let alignment = isSender ? 'justify-end' : 'justify-start';
                    let bgColor = isSender ?
                        'bg-blue-500 text-white' :
                        'bg-gray-300 text-gray-800';

                    let html = `
                        <div class="flex ${alignment}">
                            <div class="px-4 py-2 rounded-2xl max-w-xs ${bgColor}">
                                ${e.message.message}
                                <span class="text-xs opacity-70">
                                    ${new Date(e.message.created_at).toLocaleTimeString([], {
                                        hour: '2-digit',
                                        minute: '2-digit',
                                        hour12: true
                                    })}
                                </span>
                            </div>
                        </div>
                    `;

                    chatBox.innerHTML += html;

                    // 🔥 IMPORTANT LINE
                    scrollToBottom();
                });

        });
    </script>
</body>

</html>
