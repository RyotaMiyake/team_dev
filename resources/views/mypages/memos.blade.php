<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- 自己紹介 -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class='body'>{{ $user->name }}</p>
                    名前 : {{ $user->name }} <br>
                    カリキュラム進度：
                </div>
            </div>
            <!-- 備忘録作成 -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class='create'>備忘録作成</p> 
                    <p class="edit">[<a href="/mypage/{{ Auth::user()->id }}/create">備忘録作成</a>]</p>
                </div>
            </div>
            <!-- 備忘録一覧 -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class='memos'>備忘録一覧</p> 
                    <div class='memos'>
                        @foreach ($memos as $memo)
                            @if ($memo->user_id == $memo->id)
                                <div class='memo'>
                                    <h2 class='title'>
                                        {{ $memo->title }} &ensp; (作成日:{{ $memo->created_at }})
                                    </h2>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>