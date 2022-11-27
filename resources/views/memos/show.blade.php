<x-app-layout>
    <x-slot name="header">
        　投稿詳細
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Posts</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <div>
                <h1>{{ $memo->title }}</h1>
                <h1>{{ $memo->curriculum->curriculum }}</h1>
                <a href="/memos/{{ $memo->user->id }}">{{ $memo->user->name }}</a>
                <a href="/memos/{{ $memo->id }}/edit">編集</a>
                <div>
                    <h3>本文</h3>
                    <p>{{ $memo->body }}</p>
                </div>
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>