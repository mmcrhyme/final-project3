<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('') }}
        </h2> --}}
        <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
            プロフィール作成
        </button>
        <div id="hs-vertically-centered-scrollable-modal" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                    プロフィール
                </h3>
                <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                <span class="sr-only">Close</span>
                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                </svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <form class="flex-col items-center" action="{{ route('userprofile_store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- <label class="dark:text-white" for="tweet_content">つぶやき</label> --}}
                    <input class="w-full mb-1.5" type="text" name="user_nickname" id="profile_user_nickname" placeholder="ニックネームを入力">
                    <p class="text-white">プロフィール写真</p>
                    <input class="w-full mb-1.5" type="file" name="fname" id="profile_fname">
                    <input class="w-full mb-1.5" type="text" name="sns" id="profile_sns" placeholder="SNSリンク">
                    <input class="w-full mb-1.5" type="text" name="department" id="profile_department" placeholder="会社の所属">
                    <textarea class="w-full" type="text" name="detail" id="profile_detail" placeholder="所属先での具体的業務内容" cols="30" rows="10"></textarea>
                    <textarea class="w-full" type="text" name="purpose" id="profile_purpose" placeholder="この会社で叶えたいこと" cols="30" rows="10"></textarea>
                    <textarea class="w-full" type="text" name="whyme" id="profile_whyme" placeholder="叶えたいことへの思いや背景" cols="30" rows="10"></textarea>
                    <textarea class="w-full" type="text" name="motto" id="profile_motto" placeholder="座右の銘とその解釈" cols="30" rows="10"></textarea>
                    <textarea class="w-full" type="text" name="career" id="profile_career" placeholder="経歴" cols="30" rows="10"></textarea>
                    <input class="w-full mb-1.5" type="text" name="hometown" id="profile_hometown" placeholder="出身">
                    <textarea class="w-full" type="text" name="hobby" id="profile_hobby" placeholder="趣味" cols="30" rows="10"></textarea>
                    <input class="w-full mb-1.5" type="text" name="like" id="profile_like" placeholder="好きなもの">
                    <input class="w-full mb-1.5" type="text" name="dislike" id="profile_dislike" placeholder="苦手なもの">
                    <input class="w-full mb-1.5" type="text" name="strength" id="profile_strength" placeholder="長所/得意なこと">
                    <input class="w-full mb-1.5" type="text" name="weakness" id="profile_weakness" placeholder="短所/苦手なこと">
                    <input class="w-full mb-1.5" type="text" name="mbti" id="profile_mbti" placeholder="MBTI">
                    <textarea class="w-full" type="text" name="holiday" id="profile_holiday" placeholder="休日の過ごし方" cols="30" rows="10"></textarea>
                    <p class="text-white">仕事以外の自分らしい写真</p>
                    <input class="w-full mb-1.5" type="file" name="privatefname" id="profile_privatefname">
                    <input class="w-full mb-1.5" type="text" name="calendar" id="profile_calendar" placeholder="カレンダーの共有リンク">
                    <textarea class="w-full" type="text" name="comment" id="profile_comment" placeholder="一言" cols="30" rows="10"></textarea>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                <button type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                閉じる
                </button>
                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                保存
                </button>
            </div>
            </form>
            </div>
        </div>
        </div>
        
        @foreach($myprofile as $profile)
            <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-scroll-inside-body-modal">
            プロフィール編集
            </button>

            <div id="hs-scroll-inside-body-modal" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
                <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                    プロフィール編集
                    </h3>
                    <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-scroll-inside-body-modal">
                    <span class="sr-only">Close</span>
                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                    </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <form class="flex-col items-center" action="{{ route('userprofile_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="w-full mb-1.5" type="text" name="user_nickname" id="profile_user_nickname" value="{{ $profile->user_nickname }}">
                        <p class="text-white">プロフィール写真</p>
                        <input class="w-full mb-1.5" type="file" name="fname" id="profile_fname" value="{{ $profile->fname }}">
                        <input class="w-full mb-1.5" type="text" name="sns" id="profile_sns" value="{{ $profile->sns }}">
                        <input class="w-full mb-1.5" type="text" name="department" id="profile_department" value="{{ $profile->department }}">
                        <textarea class="w-full" type="text" name="detail" id="profile_detail" cols="30" rows="10">{{ $profile->detail }}</textarea>
                        <textarea class="w-full" type="text" name="purpose" id="profile_purpose" cols="30" rows="10">{{ $profile->purpose }}</textarea>
                        <textarea class="w-full" type="text" name="whyme" id="profile_whyme" cols="30" rows="10">{{ $profile->whyme }}</textarea>
                        <textarea class="w-full" type="text" name="motto" id="profile_motto" cols="30" rows="10">{{ $profile->motto }}</textarea>
                        <textarea class="w-full" type="text" name="career" id="profile_career" cols="30" rows="10">{{ $profile->career }}</textarea>
                        <input class="w-full mb-1.5" type="text" name="hometown" id="profile_hometown" value="{{ $profile->hometown }}">
                        <textarea class="w-full" type="text" name="hobby" id="profile_hobby" cols="30" rows="10">{{ $profile->hobby }}</textarea>
                        <input class="w-full mb-1.5" type="text" name="like" id="profile_like" value="{{ $profile->like }}">
                        <input class="w-full mb-1.5" type="text" name="dislike" id="profile_dislike" value="{{ $profile->dislike }}">
                        <input class="w-full mb-1.5" type="text" name="strength" id="profile_strength" value="{{ $profile->strength }}">
                        <input class="w-full mb-1.5" type="text" name="weakness" id="profile_weakness" value="{{ $profile->weakness }}">
                        <input class="w-full mb-1.5" type="text" name="mbti" id="profile_mbti" value="{{ $profile->mbti }}">
                        <textarea class="w-full" type="text" name="holiday" id="profile_holiday" cols="30" rows="10">{{ $profile->holiday }}</textarea>
                        <input class="w-full mb-1.5" type="text" name="calendar" id="profile_calendar" value="{{ $profile->calendar }}">
                        <textarea class="w-full" type="text" name="comment" id="profile_comment" cols="30" rows="10">{{ $profile->comment }}</textarea>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <button type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                    閉じる
                    </button>
                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                    保存
                    </button>
                </div>
                </form>
                </div>
            </div>
            </div>
            <div id="hs-vertically-centered-scrollable-modal" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        @endforeach
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
                    @foreach($myprofile as $profile)
                    <form action="{{ route('userprofile_destroy', ['userprofile'=>$profile->user_name]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">削除</button>
                    </form>
                        <img class="w-1/2 h-1/2" src="{{ asset('../storage/images/'.$profile->fname)}}" alt="image">
                        <div>{{ '氏名：' }}{{ $profile->user_name }}</div>
                        <div>{{ 'ニックネーム：' }}{{ $profile->user_nickname }}</div>
                        <div>{{ 'SNS：' }}{{ $profile->sns }}</div>
                        <div>{{ '所属：' }}{{ $profile->department }}</div>
                        <div>{{ '具体的な業務内容：' }}{{ $profile->detail }}</div>
                        <div>{{ 'この会社で叶えたいこと：' }}{{ $profile->purpose }}</div>
                        <div>{{ '叶えたいことへの思いや背景：' }}{{ $profile->whyme }}</div>
                        <div>{{ '座右の銘とその解釈：' }}{{ $profile->motto }}</div>
                        <div>{{ '経歴：' }}{{ $profile->career }}</div>
                        <div>{{ '出身：' }}{{ $profile->hometown }}</div>
                        <div>{{ '趣味：' }}{{ $profile->hobby }}</div>
                        <div>{{ '好きなもの：' }}{{ $profile->like }}</div>
                        <div>{{ '苦手なもの：' }}{{ $profile->dislike }}</div>
                        <div>{{ '長所/得意なこと：' }}{{ $profile->strength }}</div>
                        <div>{{ '短所/苦手なこと：' }}{{ $profile->weakness }}</div>
                        <div>{{ 'MBTI：' }}{{ $profile->mbti }}</div>
                        <div>{{ '休日の過ごし方：' }}{{ $profile->holiday }}</div>
                        <div>{{ 'カレンダーの共有リンク：' }}
                            <a href="{{ $profile->calendar }}"></a>
                        </div>
                        <div>{{ '一言：' }}{{ $profile->comment }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>