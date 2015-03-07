<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta name="Keywords" content="">
      <meta name="Description" content="">
      <!--/*@yield('title')*/-->
      <title>	      
		  销售管理系统
	  </title>
  </head>
  <body>
    <nav class="navigation">
      @section('navigation')
        <a href="/">首页</a>
		<a href="/mlogin">Login</a>
        <a href="/about">About</a>
      @show
    </nav>

    <div class="container">
       @yield('content')
    </div>
		
    <div class="sidebar">
       @yield('sidebar')
    </div>
  </body>
</html>