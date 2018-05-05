<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div style="width:1200px; padding-left:150px">
<img src="images/bfly.jpg" style="width:150px;height:80px">
<div>My Laravel and Vue
<span style="padding-left:300px">
<a href="{{ url('welcome1')}}">WELCOME |</a>
<a href="{{ url('resume1')}}">Vue Single File SPA |</a>
<a href="{{ url('vue_router1')}}">Laravel+Vue-router</a>  
</span>
<p>
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
</p>
</div>
<div>
@yield('content')
</div>

</div>

</body>
<style>

a:hover { text-decoration:underline;color:  #2ed1d3 }
</style>
</html>
