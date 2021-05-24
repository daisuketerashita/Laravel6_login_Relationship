<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoPost;
use App\User;

class InfoPostsController extends Controller
{
    //一覧表示
    public function index(){
        //ログインユーザーの情報を取得
        $user = \Auth::user();

        if($user){
            $info_posts = InfoPost::whereHas('User',function($query) use ($user) {$query->where('team', $user->team);})
                                    ->orderBy('created_at','desc')
                                    ->get();

            return view('index',['info_posts' => $info_posts]);
        }else{
            return redirect()->route('home');
        }
    }

    //詳細画面
    public function show(Request $request){
        $info_post = InfoPost::find($request->id);

        //ユーザー情報を取得
        $user = \Auth::user();
        if($user){
            $login_user_id = $user->id;
        }else{
            $login_user_id = '';
        }
        return view('show',['info_post' => $info_post,'login_user_id' => $login_user_id]);
    }

    //新規作成画面表示
    public function create(){
        return view('create');
    }

    //新規作成登録の処理
    public function store(Request $request){
        $info_post = new InfoPost;

        //ユーザー情報を取得
        $user = \Auth::user();

        $info_post->title = $request->title;
        $info_post->body = $request->body;
        $info_post->user_id = $user->id;
        $info_post->save();
        
        return redirect()->route('index');
    }

    //編集画面表示
    public function edit(Request $request){
        $info_post = InfoPost::find($request->id);
        return view('edit',['info_post' => $info_post]);
    }

    //編集処理
    public function update(Request $request){
        $info_post = InfoPost::find($request->id);

        $info_post->title = $request->title;
        $info_post->body = $request->body;
        $info_post->save();
        
        return redirect()->route('show',['id' => $info_post->id]);
    }

    //削除機能
    public function delete(Request $request){
        $info_post = InfoPost::find($request->id);
        $info_post->delete();

        return redirect()->route('index');
    }
}
