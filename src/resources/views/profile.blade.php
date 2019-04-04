<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('/css/prof.css') }}">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Caveat') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Handlee') }}" rel="stylesheet">

<div id="wrapper">
    <div id="header">
        <h1 style="margin-top:1%;font-weight:bold;">instamok</h1>
    </div>
    
    <div id="wrapperIn">
        <div id="prof">
            <p id="myimg"><img src="/img/myimg.jpg"></p>
            <div id="profInfo">
                <h2 style="font-size:1.2rem;">{{ $nickname }}</h2>
                <p style="margin-top:8%;">total favo 2203</p>
            </div>
        </div>
        <!-- エラーメッセージエリア -->
        @if ($errors->any())
            <h2>エラーメッセージ</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
        @isset ($filename)
        <div>
            <img src="{{ asset('storage/' . $filename) }}">
        </div>
        @endisset

        <div id="photos">
            <ul>
                @isset($post)
                @foreach ($posts as $p)
                    <li><img src="data:image/png;base64,<?= $p->photo ?>"></li>
                @endforeach
                @endisset
            </ul>
        </div>

    </div>
    <div id="footer">
        <ul style="margin:0;">
            <li><a href="/github">home</a></li>
            <li><a href="/home">post</a></li>
            <li><a href="welcome.blade.php">log out</a></li>
        </ul>
    </div>
</div>
