<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>株式会社VTD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://vtdvn.net" />
    <!-- css -->
    <link href="{{asset('/')}}css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="{{asset('/')}}css/jcarousel.css" rel="stylesheet" />
    <link href="{{asset('/')}}css/flexslider.css" rel="stylesheet" />
    <!-- Vendor Styles -->
    <link href="{{asset('/')}}css/magnific-popup.css" rel="stylesheet">
    <!-- Block Styles -->
    <link href="{{asset('/')}}css/style.css" rel="stylesheet" />
    <link href="{{asset('/')}}css/gallery-1.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    @yield('head')
</head>
<body>
<div id="wrapper" class="home-page">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="pull-left hidden-xs">住所：ベトナムハノイ市Cau Giay区DuyTan 町84番BQL ビル601号</p>
                    <p class="pull-right"><i class="fa fa-phone"></i>Tel No.(+84) 432-123-342</p>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>
                                <span>&copy; Copyright© VTD JSC. All Rights Reserved . Development By </span><a href="#" target="_blank">VTD Foxcatcher</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
@yield('foot')
</body>
</html>
<!-- Localized -->