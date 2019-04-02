<?php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Model\Posts; 
   use App\Http\Controllers\Controller;
   use Socialite;
   use Illuminate\Support\Facades\DB;



   class ProfileController extends Controller
   {
       public function index(Request $request) {
          $post = Posts::all(); 

          $token = $request->session()->get('github_token', null);
        try {
            $github_user = Socialite::driver('github')->userFromToken($token);
            $request->session()->put('key', $github_user);
        } catch (\Exception $e) {
            return redirect('login/github');
        }

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/user/repos', [
            'headers' => [
                'Authorization' => 'token ' . $token
            ]
        ]);

          $app_user = DB::select('select * from public.user where github_id = ?', [$github_user->user['login']]);

        return view('profile', [
            'user' => $app_user[0],
            'nickname' => $github_user->nickname,
            'token' => $token,
            'repos' => array_map(function($o) {
                return $o->name;
            }, json_decode($res->getBody()))
        ]);
       }


       // 投稿された内容を表示するページ
       public function create(Request $request) {

           // バリデーションチェック
           $request->validate([
               'photo' => 'required|max:10',
               'caption' => 'required|max:200',
           ]);

           // 投稿内容の受け取って変数に入れる
           $post = $request->input('post');
           $caption = $request->input('caption');

           Post::insert(["photo" => $photo, "caption" => $caption]); // データベーステーブルbbsに投稿内容を入れる

           $post = Post::all(); // 全データの取り出し
           return view('profile', ["post" => $post]); // bbs.indexにデータを渡す
       }

       public function upload(Request $request){
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $path = $request->file->store('public');
            return view('home')->with('filename', basename($path));
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }
    }
   }