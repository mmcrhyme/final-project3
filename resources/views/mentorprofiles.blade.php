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
                    @foreach($mentorprofiles as $mentorprofile)
                            <x-collection>
                                <details>
                                    <summary>
                                        <img class="w-1/4 h-1/4" src="{{ asset('../storage/images/'.$mentorprofile->fname)}}" alt="image">
                                        {{ '氏名：' }}{{ $mentorprofile->user_name }}（{{ $mentorprofile->user_nickname }}）
                                    </summary>
                                        <div>{{ 'SNS：' }}{{ $mentorprofile->sns }}</div>
                                        <div>{{ '所属：' }}{{ $mentorprofile->department }}</div>
                                        <div>{{ '具体的な業務内容：' }}{{ $mentorprofile->detail }}</div>
                                        <div>{{ 'この会社で叶えたいこと：' }}{{ $mentorprofile->purpose }}</div>
                                        <div>{{ '叶えたいことへの思いや背景：' }}{{ $mentorprofile->whyme }}</div>
                                        <div>{{ '座右の銘とその解釈：' }}{{ $mentorprofile->motto }}</div>
                                        <div>{{ '経歴：' }}{{ $mentorprofile->career }}</div>
                                        <div>{{ '出身：' }}{{ $mentorprofile->hometown }}</div>
                                        <div>{{ '趣味：' }}{{ $mentorprofile->hobby }}</div>
                                        <div>{{ '好きなもの：' }}{{ $mentorprofile->like }}</div>
                                        <div>{{ '苦手なもの：' }}{{ $mentorprofile->dislike }}</div>
                                        <div>{{ '長所/得意なこと：' }}{{ $mentorprofile->strength }}</div>
                                        <div>{{ '短所/苦手なこと：' }}{{ $mentorprofile->weakness }}</div>
                                        <div>{{ 'MBTI：' }}{{ $mentorprofile->mbti }}</div>
                                        <div>{{ '休日の過ごし方：' }}{{ $mentorprofile->holiday }}</div>
                                        <div>{{ 'カレンダーの共有リンク：' }}
                                            <a href="{{ $mentorprofile->calendar }}"></a>
                                        </div>
                                        <div>{{ '一言：' }}{{ $mentorprofile->comment }}</div>
                                </details>
                            </x-collection>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>