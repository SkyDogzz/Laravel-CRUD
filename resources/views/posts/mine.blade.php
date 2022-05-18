<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes posts') }}
        </h2>
    </x-slot>

    @if ($posts->isEmpty())
        <div class="flex justify-center">
            <h1 class="text-gray-800 text-lg">
                {{ __('Aucun article trouvé') }}
            </h1>
        </div>
    @else
        <div class="flex flex-wrap mx-3 mt-6">
            @foreach ($posts as $post)
                <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
                    <div class="h-full bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">
                                <a href="{{ route('posts.show', $post) }}">
                                    {{ $post->title }}
                                </a>
                            </div>
                            <div class="text-gray-700 text-base">
                                {{ $post->created_at->format('d/m/Y') }}
                            </div>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                {{ Auth::user()->name }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-app-layout>
