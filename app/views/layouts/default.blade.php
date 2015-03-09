<!DOCTYPE html>
<html>
<head lang="zh">
    <meta charset="UTF-8"/>
    <title>
        @yield('title')
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/x-icon" href="{{ URL::asset('assets/i/favicon.ico') }}"/>
    {{ HTML::style('assets/css/amazeui.min.css') }}
    {{ HTML::style('assets/css/custom.css') }}
</head>
<body>
    <header class="am-topbar am-topbar-fixed-top">
        <div class="am-container">
            <h1 class="am-topbar-brand">
      
            </h1>
	        <div style="display:none"> 
            @include('layouts.default_nav')
	        </div>
        </div>
    </header>
 
    @yield('main')
    <div style="display:none"> 
    @include('layouts.default_footer')
    </div>
    {{ HTML::script('assets/js/jquery.min.js') }}
    {{ HTML::script('assets/js/amazeui.min.js') }}
</body>
</html>