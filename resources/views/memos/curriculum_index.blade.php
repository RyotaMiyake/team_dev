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
            <div class="footer">
                <a href="/dashboard">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>