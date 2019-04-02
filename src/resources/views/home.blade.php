<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('/css/post.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Caveat') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css?family=Handlee') }}" rel="stylesheet">
<!-- エラーメッセージ。なければ表示しない -->
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div id="wrapper">
    <div id="header">
        <h1 style="margin-top:1%;font-weight:bold;">instamok</h1>
    </div>

    <div id="wrapperIn">
        <!-- フォーム -->
        <div id="upload">
        <div class="container page-header" style="width:100%;border-bottom: 0;">
            <div class="col-sm-4" style="width:100%;">
                <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
                        <div class="imagePreview"></div>
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary" style="border-radius:0;">Choose img<input type="file" class="form-control uploadFile" style="display:none" name="file"></span>
                            </label><br>
                        </div>
                        <textarea class="caption" placeholder="Comment" maxlength="200" style="vertical-align:top";></textarea>
                        <br>
                        <hr>
                        {{ csrf_field() }}
                        <button class="btn btn-success" style="border-radius:0;"> Upload </button>
                <!-- アップロードした画像。なければ表示しない -->
                @isset ($filename)
                <div class="post">
                    <p>アップロードテスト</p>
                    <img src="{{ asset('storage/' . $filename) }}">
                </div>
                @endisset
                </form>
            </div>
        </div>

        <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
            <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
            <script>
            $(document).on('change', ':file', function() {
                var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.parent().parent().next(':text').val(label);

                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file
                    reader.onloadend = function(){ // set image data as background of div
                        input.parent().parent().parent().prev('.imagePreview').css("background-image", "url("+this.result+")");
                    }
                }
            });
            </script>
        </div>
    </div><!--wrapperIn-->

    <div id="footer">
        <ul style="margin:0;">
            <li><a href="/github">home</a></li>
            <li><a href="welcome.blade.php">log out</a></li>
            <li><a href="/profile">my page</a></li>
        </ul>
    </div>
</div>


