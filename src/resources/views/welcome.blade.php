<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        <style type="text/css">
        	@media screen and (max-width:896px){
        		html{
					font-size: 15px;
				}
        		body{
					width: 100vw;
					height: 100vh;
					margin: 0 auto;
					position: relative;
				}
        		*{
					margin: 0;
					padding: 0;
				}
				li{
					list-style-type:none;
					list-style-position:outside;
				}
				a{
					text-decoration: none;
					color: #010101;
				}
				img{
					vertical-align: bottom;
				}
				#wrapper{
					width: 100vw;
					height: 100vh;
					background: linear-gradient(-135deg, #9941D8, #02DEFB);
					text-align: center; 
				}
				h1{
					font-size: 5rem;
					color: #fafafa;
					font-family: 'Caveat', cursive;
					padding-top: 30%;
				}
				#concept{
					padding-top: 5%;
					color: #fafafa;
					margin-bottom: 30%;
				}
				#wrapperIn{
					display: inline-block;
					width: 80%;
					height: 25%;
					position: relative;
					border: solid 1px #010101;
					border-radius: 3%;
					box-sizing: border-box;
					margin: 0 auto;
					-webkit-box-sizing: border-box;
					-moz-box-sizing: border-box;
					box-sizing: border-box;
					-webkit-transition: all .3s;
					transition: all .3s;
				}
				#wrapperIn a{
					display: inline-block;
					width: 100%;
					height: 100%;
				}
				#wrapperIn a:hover{
					z-index: 100;
					background-color: lightgray;
					opacity: 0.4;
				}
				#wrapperIn img{
					margin-top: 5%;
					width: 70%;
				}
				#wrapperIn p:nth-child(2){
					margin-top: -3%;
				}
				#wrapperIn p:nth-child(3){
					margin-top: 8%;
					font-size: 1.7rem;
				}
        	}
        </style>
        <title>ログイン画面</title>
    </head>
    <body>
    	<div id="wrapper">
    		<h1>instamok</h1>
    		<p id="concept">- installing your world by photo -</p>
    		<div id="wrapperIn">
    			<a href="/login/github">
    				<p><img src="../img/github.png"></p>
    	    		<p>Sign In by github</p>
    	    		<p>Tap here!</p>
    	  		</a>
    	  	</div>
        </div>
    </body>
</html>

