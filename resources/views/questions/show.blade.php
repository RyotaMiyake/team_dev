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
                    <div class='question'>
                        <h2> {{ $question->title }} </h2>
                        <h2> {{ $question->question }} </h2>
                        <img src="{{$question->image_url}}">
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                　　解答一覧
                    <div class='answers'>
                        @foreach ($answers as $answer)
                            @if($answer->question_id == $question->id)
                                <div class='answer'>
                                    <h2 class='body'>
                                        {{ $answer->answer }} &ensp; (投稿者:{{ $answer->user->name }}) &ensp; (投稿日:{{ $answer->created_at }})
                                        <img src="{{ $answer->image_url }}"></a>
                                    </h2>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/questions/{{ $question->id }}" method="POST">
                        @csrf
                        <div class="answer">
                            <h2>返信コメント</h2>
                            <textarea name="answer[answer]" placeholder="返信コメント">{{ old('answer.answer') }}</textarea>
                            <p class="answer__error" style="color:red">{{ $errors->first('answer.answer') }}</p>
                            
                            
                            <div class="images">
                                <input type="file"  name="image_url" >
                                <p class="photos__error" style="color:red">{{ $errors->first('image') }}</p>
                            </div>
                                            
                        </div>
                        <x-primary-button class="ml-3">
                            {{ __('返信') }}
                        </x-primary-button>
                        <div class="footer">
                            <a href="/questions">戻る</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>