<body>
        <x-app-layout>
            <x-slot name="header">
                　{{ Auth::user()->name }}
            </x-slot>
        <h1 class="title">
            <h2>質問タイトル</h2>
            {{ $questions->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>内容</h3>
                <p>{{ $questions->question }}</p>    
            </div>
        </div>
        <p class="edit"><a href="/questions/{{ $questions->id }}/edit">編集する</a></p>
        <div class="footer">
            <a href="/questions">戻る</a>
        </div>
         </x-app-layout>
</body>