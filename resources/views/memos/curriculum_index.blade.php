<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Answer Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>{{ $curriculum->curriculum }}</h1>
                    <div>
                        @foreach ($memos as $memo)
                            @if($memo->curriculum->id == $curriculum->id)
                                <div>
                                    <h1>
                                        <a href="/memos/{{ $memo->id }}">{{ $memo->title }}</a>
                                    </h1>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                　　<div class="footer">
                        <a href="/dashboard">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>