<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta name="Keywords" content="">
      <meta name="Description" content="">
	  <title>
      @yield('title')
	  </title>
	  @section("script")     
	  @show
	  @section("css")     
	  @show
  </head>
  <body>
    <div class="container">
        @yield('content')
    </div>
	<div class="buttoncontainer">
	    @section("buttons")
		    <input type="button" value="ȷ��" onclick="">
			<input type="button" value="ȡ��" onclick="">
        @show
    </div>
  </body>
</html>