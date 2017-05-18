{{--
* 
*
*
--}}
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name='csrf-token' content="{{ csrf_token() }}">
 
    <!-- SITE META -->
    <title>Techmag | Responsive Magazine Site Template</title>
    <meta name="description" content="">
    @include('layouts.inc.metalink.sitemeta')

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-icon">
    @include('layouts.inc.metalink.favicon')
    <!-- TEMPLATE STYLES -->
    @include('layouts.inc.metalink.styles')
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

  
</head>
<body class="header2">
    <!-- Left side social link -->
    @include('layouts.inc.social.leftsocial')

    <!-- START SITE -->

    <div id="wrapper">
        @include('layouts.inc.header')

        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    @include('layouts.inc.logo.head')
                    <!-- end col1 -->
                    @include('layouts.inc.quotes.head')
                    <!-- end col2 -->
                    @include('layouts.inc.advertising.head')
                    <!-- end col3 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->
        @yield('content')
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    @include('layouts.inc.sitelink.footer_col1')
                    <!-- end col -->
                    @include('layouts.inc.sitelink.footer_col2')
                    <!-- end col -->
                    @include('layouts.inc.social.footer_col3')
                    <!-- end col -->
                    @include('layouts.inc.subscribe.footer_col4')
                    <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        @include('layouts.inc.footer')
    </div><!-- end wrapper -->
    <!-- END SITE -->
    <!-- TEMPLATE SCRIPTS -->
    @include('layouts.inc.metalink.scripts')
</body>
</html>