<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Modifier : ' . $post->title }}
        </h1>
    </x-slot>

    {{ $user_id = Auth::user()->id }}

    @if ($user_id != $post->user_id)
        <div class="flex justify-center mt-6">
            <h2 class="text-gray-800 text-lg">
                {{ 'Vous n\'avez pas le droit de modifier ce post' }}
            </h2>
        </div>
    @else
        <div class="mt-6">
            <div class="px-10 max-w-xl mx-auto">
                <form method="POST" action="{{ route('posts.update', $post->id) }}">
                    @csrf

                    @method('PUT')

                    <div class="mb-6">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Titre') }}
                        </label>

                        <input id="title" type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="title" value="{{ $post->title }}" required autocomplete="title" autofocus>

                        @error('title')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="content" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Contenu') }}
                        </label>

                        <textarea id="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="content" required autocomplete="content">{{ $post->content }}</textarea>
                        <input type="hidden" name="user_id" value="{{ $user_id }}">

                        @error('content')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            {{ __('Modifier') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

</x-app-layout>
