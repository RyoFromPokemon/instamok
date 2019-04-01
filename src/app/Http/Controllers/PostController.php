<?php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Model\Post; // さっき作成したモデルファイルを引用


   class PostController extends Controller
   {
       // Indexページの表示
       public function index() {

           $post = Post::all(); // 全データの取り出し
           return view('profile.index', ["post" => $post]); // profileにデータを渡す
       }

       // 投稿された内容を表示するページ
       public function create(Request $request) {

           // バリデーションチェック
           $request->validate([
               'photo' => 'required|max:10',
               'caption' => 'required|max:200',
           ]);

           // 投稿内容の受け取って変数に入れる
           $photo = $request->input('photo');
           $caption = $request->input('caption');

           Post::insert(["photo" => $photo, "caption" => $caption]); // データベーステーブルbbsに投稿内容を入れる

           $post = Post::all(); // 全データの取り出し
           return view('profile', ["post" => $post]); // prosileにデータを渡す
       }
   }