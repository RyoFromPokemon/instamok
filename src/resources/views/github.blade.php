<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('/css/top.css') }}">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Caveat') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Handlee') }}" rel="stylesheet">

@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<div id="header" sytle="position:fixed;">
    <h1>instamok</h1>
</div><!--header-->

<div id="wrapper">
    <div id="wrapperIn">
        <div class="photolist">
            <div class="photolistIn">
                <p><a href="#">ユーザー名</a></p>
                <p class="postphoto"><img src="/img/kyoto.jpg"></p>
                <div class="like">
                    <p><img src="/img/like.png"></p>
                    <p>いいね　○○件</p>
                </div><!--like-->
                <p>キャプション</p>
            </div><!--photolistIn-->
        </div><!--photolist-->
        <div class="photolist">
            <div class="photolistIn">
                <p><a href="#">ユーザー名</a></p>
                <p class="postphoto"><img src="/img/kyoto.jpg"></p>
                <div class="like">
                    <p><img src="/img/like.png"></p>
                    <p>いいね　○○件</p>
                </div><!--like-->
                <p>キャプション</p>
            </div><!--photolistIn-->
        </div><!--photolist-->
        <div class="photolist">
            <div class="photolistIn">
                <p><a href="#">ユーザー名</a></p>
                <p class="postphoto"><img src="/img/kyoto.jpg"></p>
                <div class="like">
                    <p><img src="/img/like.png"></p>
                    <p>いいね　○○件</p>
                </div><!--like-->
                <p>キャプション</p>
            </div><!--photolistIn-->
        </div><!--photolist-->
    </div><!--wrapperIn-->
</div><!--wrapper-->

<div id="footer">
    <ul style="margin:0;">
        <li><a href="/home">post</a></li>
        <li><a href="/profile">my page</a></li>
        <li><a href="welcome.blade.php">log out</a></li>
    </ul>
</div><!--footer-->
    
