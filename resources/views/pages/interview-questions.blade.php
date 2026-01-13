@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center mb-10">{{ __('interview.title') }}</h1>
    <div class="space-y-4">
        @if (is_array($questions))
            @forelse ($questions as $item)
                <details class="group bg-gray-800 p-6 rounded-lg">
                    <summary class="flex items-center justify-between cursor-pointer text-lg font-medium text-white">
                        {{ $item['question'] }}
                        <span class="ml-4 transform group-open:-rotate-180 transition-transform duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </summary>
                    <div class="mt-4 text-gray-300">
                        {!! nl2br(e($item['answer'])) !!}
                    </div>
                </details>
            @empty
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                    <p>Список вопросов пуст.</p>
                </div>
            @endforelse
        @else
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                <p class="font-bold">Ошибка</p>
                <p>Не удалось загрузить список вопросов. Возможно, вам потребуется очистить кэш конфигурации (`php artisan optimize:clear`).</p>
            </div>
        @endif
    </div>
</div>
@endsection
