<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('') }}
        </h2> --}}
    </x-slot>

    @auth
    <div>
        @if (session('feedback.success'))
            <p style="color:green;">{{ session('feedback.success') }}</p>
        @endif
    </div>
    @endauth

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($menteeprofiles as $menteeprofile)
                            <x-collection>
                                <details>
                                    <summary>
                                        <img class="w-1/4 h-1/4" src="{{ asset('../storage/images/'.$menteeprofile->fname)}}" alt="image">
                                        {{ '氏名：' }}{{ $menteeprofile->user_name }}（{{ $menteeprofile->user_nickname }}）
                                    </summary>
                                        <div>{{ 'SNS：' }}{{ $menteeprofile->sns }}</div>
                                        <div>{{ '所属：' }}{{ $menteeprofile->department }}</div>
                                        <div>{{ '具体的な業務内容：' }}{{ $menteeprofile->detail }}</div>
                                        <div>{{ 'この会社で叶えたいこと：' }}{{ $menteeprofile->purpose }}</div>
                                        <div>{{ '叶えたいことへの思いや背景：' }}{{ $menteeprofile->whyme }}</div>
                                        <div>{{ '座右の銘とその解釈：' }}{{ $menteeprofile->motto }}</div>
                                        <div>{{ '経歴：' }}{{ $menteeprofile->career }}</div>
                                        <div>{{ '出身：' }}{{ $menteeprofile->hometown }}</div>
                                        <div>{{ '趣味：' }}{{ $menteeprofile->hobby }}</div>
                                        <div>{{ '好きなもの：' }}{{ $menteeprofile->like }}</div>
                                        <div>{{ '苦手なもの：' }}{{ $menteeprofile->dislike }}</div>
                                        <div>{{ '長所/得意なこと：' }}{{ $menteeprofile->strength }}</div>
                                        <div>{{ '短所/苦手なこと：' }}{{ $menteeprofile->weakness }}</div>
                                        <div>{{ 'MBTI：' }}{{ $menteeprofile->mbti }}</div>
                                        <div>{{ '休日の過ごし方：' }}{{ $menteeprofile->holiday }}</div>
                                        <div>{{ 'カレンダーの共有リンク：' }}
                                            <a href="{{ $menteeprofile->calendar }}"></a>
                                        </div>
                                        <div>{{ '一言：' }}{{ $menteeprofile->comment }}</div>
                                </details>
                            </x-collection>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>