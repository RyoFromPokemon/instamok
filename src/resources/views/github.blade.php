<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        <title>github</title>
    </head>
    <body>
        <div id="header">
            <h1>instamok</h1>
        </div>

        <div id="wrapper" style="background-color:orange;height: 1000px;margin-top:5vh;">
            <p>aaaaaa</p>
        </div>

        <div id="footer">
            <ul style="margin:0;">
                <li><a href="#" style="display:inline-block;">ホーム</a></li>
                <li><a href="welcome.blade.php">ログアウト</a></li>
                <li><a href="/home">投稿</a></li>
            </ul>
        </div>
        <!-- <form action="/user" method="post">
            {{ csrf_field() }}

            <div>お名前 : <input type="text" name="name" value="{{$user->name}}"></div>

            <div>コメント : <input type="text" name="comment" value="{{$user->comment}}"></div>


            <input type="submit" value="Confirm">
        </form>
        <div>ようこそ{{ $nickname }}さん</div>
        <div>あなたのトークンは{{ $token }}です</div>
        <div>リポジトリ一覧</div>
        <ul>
        @foreach($repos as $repo)
            <li>{{ $repo }}</li>
        @endforeach
        </ul>

        <form action="/github/issue" method="post">
            {{ csrf_field() }}

            <div>repo : <input type="text" name="repo"></div>

            <div>title : <input type="text" name="title"></div>

            <div>body : <input type="text" name="body"></div>

            <input type="submit" value="Confirm">
        </form> -->
    </body>
</html>
