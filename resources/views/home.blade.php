<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
</head>
<body>
   <div style="padding-left:1200px">
              
                        <!-- Authentication Links -->
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> |
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @else
                          
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>&nbsp&nbsp>

                               
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              
                          
                        @endguest
                    </ul>
			</div>
		
<div style="width:1200px; padding-left:150px">
<img src="images/bfly.jpg" style="width:150px;height:80px">
<div>My Laravel and Vue
<span style="padding-left:300px">
<a href="{{ url('welcome1')}}">WELCOME |</a>
<a href="{{ url('resume1')}}">Vue Single File SPA |</a>
<a href="{{ url('vue_router1')}}">Laravel+Vue-Router |</a>  
<a href="{{ url('login_status')}}">Log in Status</a> 
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
