<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Caveat') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Handlee') }}" rel="stylesheet">

<div id="wrapper">
    <div id="header">
        <h1 style="margin-top:1%;font-weight:bold;">instamok</h1>
    </div>
    
    <div id="wrapperIn">
        <p>ようこそ{{ $nickname }}さん</p>
        <!-- エラーメッセージエリア -->
        @if ($errors->any())
            <h2>エラーメッセージ</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @isset($post)
        @foreach ($post as $p)
            <h2>{{ $p->photo }}さんの投稿</h2>
            {{ $p->caption }}
            <br><hr>
        @endforeach
        @endisset

        @isset ($filename)
        <div>
            <img src="{{ asset('storage/' . $filename) }}">
        </div>
        @endisset
    </div>
    <div id="footer">
        <ul style="margin:0;">
            <li><a href="/github">home</a></li>
            <li><a href="/home">post</a></li>
            <li><a href="welcome.blade.php">log out</a></li>
        </ul>
    </div>
</div>
