<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>株式会社VTD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="pull-left hidden-xs">住所：ベトナムハノイ市Cau Giay区DuyTan 町84番BQL ビル601号</p>
                        <p class="pull-right"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top menu-cus">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"/></a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">ホーム</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">会社概要<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">Company</a></li>
                                    <li><a href="#">Our Team</a></li>


                                </ul>
                            </li>
                            <li><a href="services.html">サービス</a></li>
                            <li><a href="projects.html">プロジェクト</a></li>
                            <li><a href="#">遺物</a></li>
                            <li class="active"><a href="contact.html">お問合わせ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <section id="inner-headline" class="header-cus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">お問合わせ</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Form itself -->
                        <p>以下の内容を参考にご記載ください</p>
                        <p>・ご依頼の背景や目的</p>
                        <p>・弊社に期待すること</p>
                        <p>・機能や仕様の概要</p>
                        <p>・ご依頼の開発範囲 (企画・設計・デザイン・実装・運用)</p>
                        <!-- Form itself -->
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="会社名" id="name" required data-validation-required-message="Please enter company name" />
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="email" class="form-control" placeholder="メールアドレス" id="email" required data-validation-required-message="Please enter your email" />
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="controls">
                                    <textarea rows="10" cols="100" class="form-control" placeholder="お問合わせ内容" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"> </div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary pull-right">送信</button><br />
                        </form>
                    </div>
                    <div class="col-md-6">
                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                        <div style="overflow:hidden;height:500px;width:600px;">
                            <div id="gmap_canvas" style="height:500px;width:600px;"></div>
                            <style>
                                #gmap_canvas img {
                                    max-width: none!important;
                                    background: none!important
                                }
                            </style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div>
                        <script type="text/javascript">
                            function init_map() {
                                var myOptions = {
                                    zoom: 16,
                                    center: new google.maps.LatLng(21.031588, 105.782317),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                                marker = new google.maps.Marker({
                                    map: map,
                                    position: new google.maps.LatLng(21.031588, 105.782317)
                                });
                                infowindow = new google.maps.InfoWindow({
                                    content: "<b>株式会社VTD</b><br/>84 Duy Tan<br/> Hanoi"
                                });
                                google.maps.event.addListener(marker, "click", function() {
                                    infowindow.open(map, marker);
                                });
                                infowindow.open(map, marker);
                            }
                            google.maps.event.addDomListener(window, 'load', init_map);
                        </script>
                    </div>
                </div>
            </div>

        </section>
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

    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>
</body>

</html>
<!-- Localized -->