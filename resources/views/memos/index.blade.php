<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                　　<a href="/memos/create" class="btn">[備忘録作成]</a>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>備忘録</h1>
                    <div>
                        {{-- $memosはログイン中のユーザーと紐づいたmemosテーブルのレコードをもつ --}}
                        @foreach ($memos as $memo)  
                            <div>
                                <h1>
                                    <a href="/memos/{{ $memo->id }}">{{ $memo->title }}</a>
                                </h1>
                                <h1>{{ $memo->curriculum->curriculum }}</h1>
                                <h1>{{ $memo->createdat }}</h1>
                                <img src="{{ $memo->image_url }}"></a>
                            </div>
                            <form action="/memos/{{ $memo->id }}" id="form_{{ $memo->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteMemo({{ $memo->id }})">[削除]</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
            <script>
                function deleteMemo(id) {
                    'use strict'
                    
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </div>
    </div>
</x-app-layout>