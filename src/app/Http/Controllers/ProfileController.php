<?php

   namespace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Model\Posts; 
   use App\Http\Controllers\Controller;
   use Socialite;
   use Illuminate\Support\Facades\DB;



   class ProfileController extends Controller
   {  
       // 投稿された内容を表示するページ
       public function create(Request $request) {

           // バリデーションチェック
           $request->validate([
               'photo' => 'required',
               'caption' => 'required|max:200',
           ]);

           // 投稿内容の受け取って変数に入れる
           $photo = $request->input('photo');
           $caption = $request->input('caption');

           $posts = Post::all(); // 全データの取り出し
           return view('profile', ["post" => $post]); // bbs.indexにデータを渡す
       }

       public function index(Request $request) {
          $posts = Posts::all();

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
        ],["posts" => $posts]);
       }

   }