<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('プロフィールを編集する') }}
        </h2>
    </x-slot>

        <div>
        <a class="text-white" href="{{ route('myprofiles') }}">戻る</a>
        @if (session('feedback.success'))
            <p style="color:green;">{{ session('feedback.success') }}</p>
        @endif
        @foreach($myprofile as $profile)
            <form class="flex-col items-center" action="{{ route('userprofile_update', ['profileId' => $profile->id]) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <p class="text-white">ニックネーム</p>
                <input class="w-full mb-1.5" type="text" name="user_nickname" id="profile_user_nickname" value="{{ $profile->user_nickname }}">
                <p class="text-white">プロフィール写真</p>
                <input class="w-full mb-1.5" type="file" name="fname" id="profile_fname" value="{{ $profile->fname }}">
                <p class="text-white">SNS</p>
                <input class="w-full mb-1.5" type="text" name="sns" id="profile_sns" value="{{ $profile->sns }}">
                <p class="text-white">会社の所属</p>
                <input class="w-full mb-1.5" type="text" name="department" id="profile_department" value="{{ $profile->department }}">
                <p class="text-white">具体的な担当業務</p>
                <textarea class="w-full" type="text" name="detail" id="profile_detail" cols="30" rows="10">{{ $profile->detail }}</textarea>
                <p class="text-white">この会社で叶えたいこと：</p>
                <textarea class="w-full" type="text" name="purpose" id="profile_purpose" cols="30" rows="10">{{ $profile->purpose }}</textarea>
                <p class="text-white">叶えたいことへの思いや背景：</p>
                <textarea class="w-full" type="text" name="whyme" id="profile_whyme" cols="30" rows="10">{{ $profile->whyme }}</textarea>
                <p class="text-white">座右の銘とその解釈：</p>
                <textarea class="w-full" type="text" name="motto" id="profile_motto" cols="30" rows="10">{{ $profile->motto }}</textarea>
                <p class="text-white">経歴：</p>
                <textarea class="w-full" type="text" name="career" id="profile_career" cols="30" rows="10">{{ $profile->career }}</textarea>
                <p class="text-white">出身：</p>
                <input class="w-full mb-1.5" type="text" name="hometown" id="profile_hometown" value="{{ $profile->hometown }}">
                <p class="text-white">趣味：</p>
                <textarea class="w-full" type="text" name="hobby" id="profile_hobby" cols="30" rows="10">{{ $profile->hobby }}</textarea>
                <p class="text-white">好きなもの：</p>
                <input class="w-full mb-1.5" type="text" name="like" id="profile_like" value="{{ $profile->like }}">
                <p class="text-white">苦手なもの：</p>
                <input class="w-full mb-1.5" type="text" name="dislike" id="profile_dislike" value="{{ $profile->dislike }}">
                <p class="text-white">長所/得意なこと：</p>
                <input class="w-full mb-1.5" type="text" name="strength" id="profile_strength" value="{{ $profile->strength }}">
                <p class="text-white">短所/苦手なこと：</p>
                <input class="w-full mb-1.5" type="text" name="weakness" id="profile_weakness" value="{{ $profile->weakness }}">
                <p class="text-white">MBTI：</p>
                <input class="w-full mb-1.5" type="text" name="mbti" id="profile_mbti" value="{{ $profile->mbti }}">
                <p class="text-white">休日の過ごし方：</p>
                <textarea class="w-full" type="text" name="holiday" id="profile_holiday" cols="30" rows="10">{{ $profile->holiday }}</textarea>
                <p class="text-white">カレンダーの共有リンク：</p>
                <input class="w-full mb-1.5" type="text" name="calendar" id="profile_calendar" value="{{ $profile->calendar }}">
                <p class="text-white">一言：</p>
                <textarea class="w-full" type="text" name="comment" id="profile_comment" cols="30" rows="10">{{ $profile->comment }}</textarea>           
        @endforeach
                <button type="submit" class="btn bg-blue-500 m-2 p-2">保存</button>
            </form>
        </div>
</x-app-layout>