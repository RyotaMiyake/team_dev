<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さんようこそ！
        </h2>
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="">カリキュラムごとの備忘録へジャンプ</h1>
                </div>
            </div>
            
            <div>
                @foreach ($curricula as $curriculum)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="w-full">
                                <h1 class="text-xl">
                                    <a href="/curricula/{{ $curriculum->id }}">{{ $curriculum->curriculum }}</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </body>
    </html>
</x-app-layout>