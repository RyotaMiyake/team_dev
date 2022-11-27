<x-app-layout>
    <x-slot name="header">
        　マイページ
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1>{{ Auth::user()->name }}</h1>
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
                        <button type="button" onclick="deleteMemo({{ $memo->id }})">削除</button>
                    </form>
                @endforeach
            </div>
            <a href="/memos/create" class="btn">備忘録作成</a>
            <script>
                function deleteMemo(id) {
                    'use strict'
            
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </html>
</x-app-layout>