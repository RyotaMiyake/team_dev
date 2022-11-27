<x-app-layout>
    <x-slot name="header">
        作成
    </x-slot>
        <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
        </head>
        <body>
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
            <div class="footer">
                <a href="/memos">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>