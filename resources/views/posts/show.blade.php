<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h1>
    </x-slot>

    <div>
        <div class="flex justify-center mt-6">
            <h2 class="text-gray-800 text-lg">
                {{ $post->content }}
            </h2>
        </div>
        <div class="flex justify-center mt-6">
            <h3 class="text-gray-800 text-lg">
                {{ $post->created_at }}
                {{ ' by ' }}

                <span class=" text-blue-700">
                    {{ $users[$post->user_id - 1]->name }}
                </span>
            </h3>
        </div>
    </div>
    @if ($users[$post->user_id - 1] == Auth::user())
        <div class="flex justify-center mt-6">
            <a href="{{ route('posts.edit', $post->id) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Modifier
            </a>
        </div>
        <div class="flex justify-center mt-6">
            <form class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" method="POST" action="{{ route('posts.delete', $post->id) }}" >

                @csrf

                @method("DELETE")

                <input type="submit" value="x Supprimer" >
            </form>
        </div>
    @endif


</x-app-layout>
