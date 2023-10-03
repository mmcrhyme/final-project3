<?php

namespace App\Http\Controllers;

use App\Models\Userprofile;
use Illuminate\Http\Request;
use App\Http\Requests\Profile\CreateRequest;
use App\Http\Requests\Profile\UpdateRequest;
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
        $menteeprofiles = $userprofileService->getMenteeprofiles(); //ツイートの一覧を取得

        return view('menteeprofiles')
        ->with('menteeprofiles', $menteeprofiles);
    }

    public function mentor(UserprofileService $userprofileService)
    {
        $mentorprofiles = $userprofileService->getMentorprofiles(); //ツイートの一覧を取得

        return view('mentorprofiles')
        ->with('mentorprofiles', $mentorprofiles);
    }

    public function myprofile(UserprofileService $userprofileService)
    {
        $myprofile = $userprofileService->getMyprofiles(); //ツイートの一覧を取得

        return view('myprofile')
        ->with('myprofile', $myprofile);
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
    public function store(CreateRequest $request)
    {
        $image = $request->file('fname');
        if ($image) {
            // ファイル名を生成
            $filename = time() . '_' . $image->getClientOriginalName();

            // 画像を指定のディレクトリに保存
            $image->move('../storage/app/public/images',$filename);
        } 
        else {
            $filename = '';
        }

        $userprofiles = new Userprofile();
        $userprofiles->user_name = Auth::user()->name;
        $userprofiles->role = Auth::user()->role;
        $userprofiles->user_nickname = $request->user_nickname();
        $userprofiles->fname = $filename;
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

        $image2 = $request->file('privatefname');
        if ($image2) {
            // ファイル名を生成
            $filename2 = time() . '_' . $image->getClientOriginalName();

            // 画像を指定のディレクトリに保存
            $image2->move('../storage/app/public/images', $filename2);
        } 
        else {
            $filename2 = '';
        }

        $userprofiles->privatefname = $filename2;
        $userprofiles->calendar = $request->calendar();
        $userprofiles->comment = $request->comment();

        $userprofiles->save();
        return redirect()->route('myprofiles');
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
    public function update(UpdateRequest $request, Userprofile $userprofile)
    {
        $image = $request->file('fname');
        if ($image) {
            // ファイル名を生成
            $filename = time() . '_' . $image->getClientOriginalName();

            // 画像を指定のディレクトリに保存
            $image->move('../storage/app/public/images', $filename);
        }
        else{
            $filename = '';
        }
        $userprofiles = Userprofile::find($request->id);
        $userprofiles->user_name = Auth::user()->name;
        $userprofiles->role = Auth::user()->role;
        $userprofiles->user_nickname = $request->user_nickname();
        $userprofiles->fname = $filename;
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
        $image2 = $request->file('privatefname');
        if ($image2) {
            // ファイル名を生成
            $filename2 = time() . '_' . $image->getClientOriginalName();

            // 画像を指定のディレクトリに保存
            $image2->move('../storage/app/public/images', $filename2);
        } 
        else {
            $filename2 = '';
        }

        $userprofiles->privatefname = $filename2;
        $userprofiles->calendar = $request->calendar();
        $userprofiles->comment = $request->comment();
        $userprofiles->save();

        return redirect()->route('myprofiles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, UserprofileService $userprofileService)
    {
        $userprofile = Userprofile::where('user_name', Auth::user()->name)->firstOrFail();
        $userprofile->delete();
        return redirect()
            ->route('myprofiles')
            ->with('feedback.success', 'プロフィールを削除しました');
    }
}
