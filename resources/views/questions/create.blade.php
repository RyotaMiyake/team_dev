<body>
        <x-app-layout>
            <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <p>{{ __('Blog一覧') }}</p>
                <p>ログイン中の{{ Auth::user()->name }}さん</p>
            </h2>
            </x-slot>
<h1>Blog Name</h1>
        <form action="/questions" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type= "text" name = "question[title]" placeholder="質問タイトル" value ="{{ old('question.title') }}">
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            
            <div class="body">
                <h2>Body</h2>
                <textarea name="question[question]" placeholder="質問内容投稿" >{{ old('question.question') }}</textarea>
                <p class="question__error" style="color:red">{{ $errors->first('question.question') }}</p>
            </div>
            
            <div class="images">
                <input type="file"  name="image_url" >
                <p class="photos__error" style="color:red">{{ $errors->first('image') }}</p>
            </div>
            
            <input type="submit" value="送信"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </x-app-layout>
</body>