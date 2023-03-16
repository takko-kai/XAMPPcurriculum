<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//モデルの呼び出し
use App\Post;
use App\User;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    //トップ画面の表示
    public function add()
    {
        return view('post');
    }
//つぶやき作成機能 
    public function create(Request $request)
    {
        //正しい値かどうか
        $this->validate($request, Post::$rules);
        $post = new Post;
        //ホームから送られた内容の全て（body user_id）
        $form = $request->all();
        Log::debug($form);
        unset($form['_token']);
        Log::debug($form);


        // データベースに保存
        $post->fill($form);
        $post->save();

        return redirect('/post/');    
    }
    //つぶやきの情報とユーザー情報取得
    public function index()
    {
        //usersテーブルの全情報を変数に入れる
        $user = User::all();
        //postテーブルの最新の情報全てを取得
        $post = Post::orderBy('created_at', 'desc')->get();
        //blade側で使う変数＝＞contorollerで取得したデータ
        return view('post',['posts' => $post, 'users' => $user]);
    }

    public function delete(Request $request)
    {
        //レコード一行を選択して取得
        $post = Post::find($request->post_id);
        $post->delete();

        return redirect('/post/');
    }

       
}
