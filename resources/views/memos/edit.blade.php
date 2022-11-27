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
                    <h1>備忘録編集</h1>
            <form action="/memos" method="PUT" enctype="multipart/form-data">
                @csrf
                <div>
                    <h1>備忘録編集</h1>
                    <form action="/memos" method="PUT" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <h2>カリキュラム</h2>
                            <select name="memo[curriculum_id]">
                                @foreach($curricula as $curriculum)
                                    <option value="{{ $curriculum->id }}">{{ $curriculum->curriculum }}</option>
                                @endforeach
                            </select>
                            <h2>タイトル</h2>
                            <input type="text" name=memo[title] placeholder="タイトル" value="{{ $memo->title }}"/>
                            <p>{{ $errors->first('memo.title') }}</p>
                        </div>
                        <div>
                            <h2>内容</h2>
                            <textarea name="memo[body]" placeholder="今日の学び">{{ $memo->body }}</textarea>
                            <p>{{ $errors->first('post.body') }}</p>
                            <img src="{{ $memo->image_url }}"></a>
                        </div>
                        <div>
                            <input type="file" name="image_url">
                        </div>
                        <input type="submit" value="store"/>
                    </form>    
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                　　<div class="footer">
                        <a href="/memos">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>