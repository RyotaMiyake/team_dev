<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    <p>{{ __('Blog一覧') }}</p>
                    <p>ログイン中の{{ Auth::user()->name }}さん</p>
                </h2>
            </x-slot>
            <div class='events'>
            @foreach ($questions as $q)
                <div class='question'>
                    
                    <h1 class='title'>
                        <a href="/questions/{{ $q->id }}">{{ $q->title }}</a>
                    </h1>
                    
                    <h2 class='questions'>
                        <a href="/questions/{{ $q->id }}">{{ $q->question }}</a>
                    </h2>
                    <img src="{{ $q->image_url }}" alt="">
                </div>
               
                <form action="/questions/{{ $q->id }}" id="form_{{ $q->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deleteQuestion({{ $q->id }})">質問削除</button>
            </form>
            @endforeach
            
            <a href='/questions/create'>質問作成</a>
            
            <script>
                function deleteQuestion(id) {
                    'use strict'
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
            <div class='paginate'>
                {{ $questions->links() }}
            </div>
        </x-app-layout>
</body>
</html>