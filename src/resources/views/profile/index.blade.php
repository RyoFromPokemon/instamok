<!DOCTYPE HTML>
<html>
<head>
    <title>掲示板</title>
</head>
<body>

<h1>掲示板</h1>

<!-- エラーメッセージエリア -->
@if ($errors->any())
    <h2>エラーメッセージ</h2>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<!-- 投稿表示エリア（編集するのはここ！） -->
@isset($post)
@foreach ($post as $p)
    <h2>{{ $p->photo }}さんの投稿</h2>
    {{ $p->caption }}
    <br><hr>
@endforeach
@endisset

<!-- フォームエリア -->
<h2>フォーム</h2>
<form action="/profile" method="POST">
    名前:<br>
    <input name="photo">
    <br>
    コメント:<br>
    <textarea name="caption" rows="4" cols="40"></textarea>
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> 送信 </button>
</form>

</body>
</html>