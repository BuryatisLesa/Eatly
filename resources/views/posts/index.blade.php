<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if($posts->isEmpty())
                    <p class="p-6 text-gray-900">Нет постов для отображения.</p>
                @else
                    <div class="p-6 text-gray-900">
                        @foreach($posts as $post)
                            <div>
                                <p><strong>Заголовок:</strong> {{ $post->title }}</p>
                                <p><strong>Описание:</strong> {{ $post->content }}</p>
                                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title }}" width="500" height="500" >
                                <hr>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
