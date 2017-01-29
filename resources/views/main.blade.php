<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS:GO Config</title>

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='stylesheet' id='some-fonts-css'  href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700%2C400italic%2C600italic%2C700italic%7COxygen%3A400%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='some-style-css'  href="{{ URL::to('style.css?ver=1.1.0') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='some-fonts-css'  href="{{ URL::to('assets\dropzone\min\basic.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='some-fonts-css'  href="{{ URL::to('assets\dropzone\min\dropzone.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='some-fonts-css'  href="{{ URL::to('assets\css\custom.css') }}" type='text/css' media='all' />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body class="blog hfeed footer-widgets-1">
    <div id="page" class="site">
    	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <header id="masthead" class="site-header" role="banner">
            @include('nav')
            @yield('brand')
        </header><!-- #masthead -->
        @yield('content')
    	<footer id="colophon" class="site-footer" role="contentinfo">
    		<div class="site-info">
    			Developed by <a href="http://goxlab.com/">Goran Banina</a>
    			<span class="sep"> | </span>
    			Theme: some by <a href="https://foxland.fi/">Sami Keijonen</a>.
            </div><!-- .site-info -->
    	</footer><!-- #colophon -->
    </div><!-- #page -->

    <script type="text/javascript"></script>
    <script src="{{ URL::to('assets/js/custom.js') }}"></script>
    <script type='text/javascript' src="{{ URL::to('assets/js/navigation.min.js?ver=20163012') }}"></script>
    <script type='text/javascript' src="{{ URL::to('assets/js/svgxuse.min.js?ver=20163012') }}"></script>
    <script type='text/javascript' src='https://foxland.fi/demo/some/wp-includes/js/wp-embed.min.js?ver=4.7.1'></script>
</body>
</html>
