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
        <section class="section bgg"style="padding:0px">
            <div class="container">
                <div class="title-area">
                    <h1 >404 Page <small class="hidden-xs"></small></h1>
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="{{asset('/')}}">Головна</a></li>
                            <li class="active">404 Page</li>
                        </ol>
                    </div>
                    <!-- end bread -->
                </div>
                <!-- /.pull-right -->
            </div>
            <!-- end container -->
        </section>

        <div class="container sitecontainer bgw">
            <div class="row">
                <div class="col-md-12 m22 single-post">
                    <div class="widget">
                        <div class="large-widget m30">
                            <div class="post-desc">

                                <div class="page-404-content">
                                    <div class="row">
                                        <div class="col-sm-6 hidden-xs">
                                            <img alt="404-page" src="images/image-404.jpg">
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <h2>
                                            404
                                            <span>Помилка!</span>
                                            </h2>
                                            <p>
                                            На жаль, ми не можемо знайти сторінку, яку ви шукаєте. <br>Будь ласка перейдіть на
                                            <a href="{{asset('/')}}">Головну </a>сторінку або до форми пошуку.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end post-desc -->
                        </div>
                        <!-- end large-widget -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        
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