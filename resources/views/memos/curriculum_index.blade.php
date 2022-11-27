<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>{{ $curriculum->curriculum }}</h1>
                </div>
            </div>
            <div>
                @foreach ($memos as $memo)
                    @if($memo->curriculum->id == $curriculum->id)
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div>
                                    <h1>
                                        <a class="text-3xl" href="/memos/{{ $memo->id }}">{{ $memo->title }}</a>
                                        <p>投稿者：{{ $memo->user->name }}</p>
                                        <p>投稿日時：{{ $memo->created_at }}</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/dashboard">戻る</a>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>