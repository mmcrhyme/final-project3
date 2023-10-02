<?php

namespace App\Http\Controllers;

use App\Models\Userprofile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Services\UserprofileService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mentee(UserprofileService $userprofileService)
    {
        $menteeprofile = $userprofileService->getMenteeprofiles(); //ツイートの一覧を取得

        return view('menteeprofiles')
        ->with('menteeprofiles', $menteeprofile);
    }

    public function mentor(UserprofileService $userprofileService)
    {
        $mentorprofile = $userprofileService->getMentorprofiles(); //ツイートの一覧を取得

        return view('mentorprofiles')
        ->with('mentorprofiles', $mentorprofile);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userprofiles = new Userprofile();
        $userprofiles->user_name = Auth::user()->name;
        $userprofiles->role = Auth::user()->role;
        $userprofiles->user_nickname = $request->user_nickname();
        $userprofiles->fname = $request->fname();
        $userprofiles->sns = $request->sns();
        $userprofiles->department = $request->department();
        $userprofiles->detail = $request->detail();
        $userprofiles->purpose = $request->purpose();
        $userprofiles->whyme = $request->whyme();
        $userprofiles->motto = $request->motto();
        $userprofiles->career = $request->career();
        $userprofiles->hometown = $request->hometown();
        $userprofiles->hobby = $request->hobby();
        $userprofiles->like = $request->like();
        $userprofiles->dislike = $request->dislike();
        $userprofiles->strength = $request->strength();
        $userprofiles->weakness = $request->weakness();
        $userprofiles->mbti = $request->mbti();
        $userprofiles->holiday = $request->holiday();
        $userprofiles->privatefname = $request->privatefname();
        $userprofiles->calendar = $request->calendar();
        $userprofiles->comment = $request->comment();

        $userprofiles->save();
        return redirect()->route('userprofile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Userprofile $userprofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Userprofile $userprofile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Userprofile $userprofile)
    {
        $userprofiles = Userprofile::find($request->id);
        $userprofiles->user_name = Auth::user()->name;
        $userprofiles->role = Auth::user()->role;
        $userprofiles->user_nickname = $request->user_nickname();
        $userprofiles->fname = $request->fname();
        $userprofiles->sns = $request->sns();
        $userprofiles->department = $request->department();
        $userprofiles->detail = $request->detail();
        $userprofiles->purpose = $request->purpose();
        $userprofiles->whyme = $request->whyme();
        $userprofiles->motto = $request->motto();
        $userprofiles->career = $request->career();
        $userprofiles->hometown = $request->hometown();
        $userprofiles->hobby = $request->hobby();
        $userprofiles->like = $request->like();
        $userprofiles->dislike = $request->dislike();
        $userprofiles->strength = $request->strength();
        $userprofiles->weakness = $request->weakness();
        $userprofiles->mbti = $request->mbti();
        $userprofiles->holiday = $request->holiday();
        $userprofiles->privatefname = $request->privatefname();
        $userprofiles->calendar = $request->calendar();
        $userprofiles->comment = $request->comment();

        $userprofiles->save();
        return redirect()->route('userprofile.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, UserprofileService $userprofileService)
    {
        $userprofileId = (int) $request->route('userprofileId');
        if (!$userprofileService->checkOwnProfile(Auth::user()->id, $userprofileId)) {
            throw new AccessDeniedHttpException();
        }
        $userprofile = Userprofile::where('id', $userprofileId)->firstOrFail();
        $userprofile->delete();
        return redirect()
            ->route('userprofile_index')
            ->with('feedback.success', 'プロフィールを削除しました');
    }
}
