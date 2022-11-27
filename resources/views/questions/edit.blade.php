<h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/questions/{{ $questions->id }}" method="POST">
                @csrf
                @method('PUT')
            <div class='content__title'>
                        <h2>質問タイトル</h2>
                        <input type='text' name='question[title]' value="{{ $questions->title }}">
                        <p class="title__error" style="color:red">{{ $errors->first('question.title') }}</p>
                    </div>
                    <div class='content__body'>
                        <h2>質問内容</h2>
                        <input type='text' name='question[question]' value="{{ $questions->question }}">
                        <p class="title__error" style="color:red">{{ $errors->first('question.question') }}</p>
                    </div>
                        <input type="submit" value="保存">
                    </form>
            </div>
