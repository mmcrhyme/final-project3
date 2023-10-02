<?php

namespace App\Services;

use App\Models\Userprofile;

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
