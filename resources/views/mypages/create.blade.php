<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('備忘録作成') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <body>
                        <!-- 備忘録の作成 -->
                        <h1 class="title">備忘録作成</h1>
                        <div class="content">
                            <form action="/mypage/{{ Auth::user()->id }}" method="POST">
                                @csrf
                                <div class="title">
                                    <h2>タイトル</h2>
                                    <input type="text" name="memo[title]" placeholder="タイトル" value="{{ old('memo.title') }}"/>
                                    <p class="title__error" style="color:red">{{ $errors->first('memo.title') }}</p>
                                </div>
                                <div class="body">
                                    <h2>内容</h2>
                                    <textarea name="memo[body]" placeholder="内容">{{ old('memo.body') }}</textarea>
                                    <p class="body__error" style="color:red">{{ $errors->first('memo.body') }}</p>
                                </div>
                                <div>
                                    <h2>カリキュラム</h2>
                                    <select name="memo[curriculam_id]">
                                        @foreach($curriculams as $curriculams)
                                            <option value="{{ $curriculam->id }}">{{ $curriculam->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <x-primary-button class="ml-3">
                                    {{ __('作成') }}
                                </x-primary-button>
                            </form>
                            <!-- マイページに戻る -->
                            <div class="footer">
                                <a href="/mypage/{{ Auth::user()->id }}">戻る</a>
                            </div>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>