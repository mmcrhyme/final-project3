<?php

namespace App\Services;

use App\Models\Userprofile;
use Illuminate\Support\Facades\Auth;

class UserprofileService
{
    public function getMenteeprofiles()
    {
        return Userprofile::where('role', 'mentee')->get();
    }

    public function getMentorprofiles()
    {
        return Userprofile::where('role', 'mentor')->get();
    }

    public function getMyprofiles()
    {
        return Userprofile::where('user_name', Auth::user()->name)->get();
    }

    //自分の投稿かどうかをチェックするメソッド
    public function checkOwnProfile(int $userId, int $userprofileId): bool
    {
        $userprofile = Userprofile::where('id', $userprofileId)->first();
        if (!$userprofile) {
            return false;
        }

        return $userprofile->user_id === $userId;
    }
}
