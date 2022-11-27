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
                    質問
                    <div class='memo'>
                        <h1>{{ $memo->title }}</h1>
                        <h1>{{ $memo->curriculum->curriculum }}</h1>
                        <a href="/memos/{{ $memo->user->id }}">{{ $memo->user->name }}</a>
                        <img src="{{ $memo->image_url }}"></a>
                        <div>
                            <h3>本文</h3>
                            <p>{{ $memo->body }}</p>
                        </div>
                        <a href="/memos/{{ $memo->id }}/edit">[編集]</a>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                　　解答一覧
                    <div class='comments'>
                        @foreach ($comments as $comment)
                            @if($comment->memo_id == $memo->id)
                                <div class='comment'>
                                    <h2 class='body'>
                                        {{ $comment->comment }} &ensp; (投稿者:{{ $comment->user->name }}) &ensp; (投稿日:{{ $comment->created_at }})
                                    </h2>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/memos/{{ $memo->id }}" method="POST">
                        @csrf
                        <div class="comment">
                            <h2>返信コメント</h2>
                            <textarea name="comment[comment]" placeholder="返信コメント">{{ old('comment.comment') }}</textarea>
                            <p class="comment__error" style="color:red">{{ $errors->first('comment.comment') }}</p>
                        </div>
                        <x-primary-button class="ml-3">
                            {{ __('返信') }}
                        </x-primary-button>
                        <div class="footer">
                            <a href="/memos">戻る</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>