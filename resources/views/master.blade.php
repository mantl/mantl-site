<!doctype html>

<html class="no-js" lang="">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>@yield('title') | Mantl.io</title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="static/css/style.min.css">

		<script src="static/vendor/modernizr-2.8.3.min.js"></script>
		
    </head>

    <body>
        
        
        <header>
            
            <button class="menu-toggle toggle-button--htx"><span>Toggle Menu</span></button>

            <a class="logo" href="{{ url('/') }}">Home</a>
<nav class="menu">

            <ul class="main">
                                
                <li><a href="{{ url('/features') }}" @if($pageID == 1) class="active" @endif>Features</a></li>
                
                <li><a href="{{ url('/technologies') }}" @if($pageID == 2) class="active" @endif>Technologies</a></li>
                
                <li><a href="{{ url('/resources') }}" @if($pageID == 3) class="active" @endif>Resources</a></li>
                
                <li><a href="{{ url('/faq') }}" @if($pageID == 4) class="active" @endif>FAQ</a></li>
                
                <li><a href="{{ url('/download') }}" @if($pageID == 5) class="active" @endif>Download</a></li>
                
            </ul>

            @include('components.icons-menu')

        </nav>

        </header>

        <div id="main">
            
            @yield('content')

        </div>	

        @include('components.footer')	

		<script src="static/js/bundle.min.js"></script>

		<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    </body>

</html>