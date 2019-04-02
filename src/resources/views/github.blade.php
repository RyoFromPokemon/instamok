<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('/css/all.css') }}">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Caveat') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Handlee') }}" rel="stylesheet">

@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div id="wrapper">

    <div id="header">
        <h1>instamok</h1>
    </div>

    <div id="wrapperIn">
        <p>aaaaaa</p>
        <p>ようこそ{{ $nickname }}さん</p>
        <form action="/user" method="post">
            {{ csrf_field() }}

            <div>お名前 : <input type="text" name="name" value="{{$user->name}}"></div>

            <div>コメント : <input type="text" name="comment" value="{{$user->comment}}"></div>


            <input type="submit" value="Confirm">
        </form>
    </div>

    <div id="footer">
        <ul style="margin:0;">
            <li><a href="/home">post</a></li>
            <li><a href="/profile">my page</a></li>
            <li><a href="welcome.blade.php">log out</a></li>
        </ul>
    </div>

</div>
    
