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
                <img src="{{ $questions->image_url }}">
            </div>
        </div>
        
        
        <div class="answer">
                @foreach ($questions as $q)
                    <div class='question'>
                        
                        <h1 class='title'>
                         <h2>回答</h2>
                            {{ $questions->title }}
                        </h1>
                        
                        <h2 class='questions'>
                            
                        </h2>
                        
                    </div>
                   
                    <form action="/questions/{{ $q->id }}" id="form_{{ $q->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteQuestion({{ $q->id }})">回答コメント削除</button>
                </form>
                </div>
                @endforeach
        </div>
        
        
        
        
        <form action="/questions/{{ $questions->id }}" method="POST">
                @csrf
                @method('POST')
             <div class='content__title'>
                 
                        <h2>回答コメント</h2>
                        <input type='text' name='question[title]'>
                        <p class="title__error" style="color:red">{{ $errors->first('question.title') }}</p>
                    </div>
                    <div class='content__body'>
                        <h2>コメント画像</h2>
                        <input type='file' name='image_url'>
                        <p class="title__error" style="color:red">{{ $errors->first('question.question') }}</p>
                    </div>
        </form>
            </div>
            
        <p class="edit"><a href="/questions/{{ $questions->id }}">回答コメントする</a></p>
        <div class="footer">
            <a href="/questions">戻る</a>
        </div>
         </x-app-layout>
</body>