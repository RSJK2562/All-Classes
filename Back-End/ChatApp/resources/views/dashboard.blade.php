<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <hr>
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-4">👥 User Information</h2>
                    <ul>
                        @foreach ($users as $user)
                            <li class="m-2">
                                <a href="{{ route('chat.index', ['id' => encrypt($user->id)]) }}"
                                    class="inline-flex items-center justify-center px-6 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                                    style="text-transform: capitalize;">
                                    {{ $user->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
