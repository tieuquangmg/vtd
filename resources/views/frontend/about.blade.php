@extends('frontend.layout')
@section('head')

@endsection
@section('title')
    <title>株式会社VTD</title>
    @endsection
@section('content')
    <!-- end header -->
    <section id="inner-headline" class="header-cus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">About Us</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <section class="section-padding">
            <div class="container">
                <div class="row showcase-section">
                    <div class="col-md-6">
                        <img src="img/dev1.png" alt="showcase image">
                    </div>
                    <div class="col-md-6">
                        <div class="about-text">
                            <h3>Lorem Ipsum Dolor sit</h3>
                            <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Vivamus suscipit tortor eget felis
                                porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet
                                elit, eget tincidunt nibh pulvinar.</p>
                            <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo..</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">

            <div class="about">


                <div class="row">
                    <div class="col-md-4">
                        <!-- Heading and para -->
                        <div class="block-heading-two">
                            <h3><span>Why Choose Us?</span></h3>
                        </div>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur. <br/><br/>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't
                            heard of them accusamus.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="block-heading-two">
                            <h3><span>Our Solution</span></h3>
                        </div>
                        <!-- Accordion starts -->
                        <div class="panel-group" id="accordion-alt3">
                            <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                            <div class="panel">
                                <!-- Panel heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-alt3"
                                           href="#collapseOne-alt3">
                                            <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne-alt3" class="panel-collapse collapse">
                                    <!-- Panel body -->
                                    <div class="panel-body">
                                        Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-alt3"
                                           href="#collapseTwo-alt3">
                                            <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo-alt3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-alt3"
                                           href="#collapseThree-alt3">
                                            <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree-alt3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-alt3"
                                           href="#collapseFour-alt3">
                                            <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour-alt3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion ends -->

                    </div>

                    <div class="col-md-4">
                        <div class="block-heading-two">
                            <h3><span>Our Expertise</span></h3>
                        </div>
                        <h6>Web Development</h6>
                        <div class="progress pb-sm">
                            <!-- White color (progress-bar-white) -->
                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <h6>Designing</h6>
                        <div class="progress pb-sm">
                            <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <h6>User Experience</h6>
                        <div class="progress pb-sm">
                            <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <h6>Development</h6>
                        <div class="progress pb-sm">
                            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </div>

                </div>


                <section class="section-padding">
                    <div class="container">

                        <table border="1" bordercolor="#ccc" cellpadding="0" cellspacing="0"
                               style="border-collapse:collapse; width:100%">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>会社名&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </th>
                                <td>
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p>&nbsp;</p>
                                            </td>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p>Vietnam Information Technology &amp; Solution Development Company</p>

                                                <p>ベトナムIT技術とソリューション開発株式会社（略称 VTD株式会社）</p>

                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>設立日</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </th>
                                <td>
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p>&nbsp;</p>
                                            </td>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p>2015年3月24日</p>

                                                <p>&nbsp;&nbsp;</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>所在地</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </th>
                                <td>
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p>
                                                    <span style="font-size:12px">ベトナムハノイ市Cau Giay区DuyTan 町84番BQL ビル601号</span>
                                                </p>

                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="font-weight:bold; line-height:20.7999992370605px; text-align:center">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <span style="font-family:verdana,helvetica neue,helvetica,arial,sans-serif; font-size:14.3999996185303px">Eメール</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </th>
                                <td>
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="font-weight:bold; line-height:20.7999992370605px; text-align:center">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p><strong>info@vtdvn.net</strong></p>

                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>電話番号</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </th>
                                <td>
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p>+84 -&nbsp;432 - 123 - 342　</p>

                                                <p>+84 - 946 - 056 - 960</p>

                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="font-weight:bold; line-height:20.7999992370605px; text-align:center">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <span style="font-family:verdana,helvetica neue,helvetica,arial,sans-serif; font-size:14.3999996185303px">資本金</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </th>
                                <td>
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p>300万円（2015年12月現在）</p>

                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <span style="font-family:verdana,helvetica neue,helvetica,arial,sans-serif; font-size:14.3999996185303px">事業内容</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </th>
                                <td>
                                    <table border="0" cellpadding="1" cellspacing="1"
                                           style="line-height:20.7999992370605px">
                                        <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <p>&nbsp;</p>

                                                <p>・WEBアプリケーション開発<br/> ・スマートフォンアプリケーション開発&nbsp;
                                                    <br/> ・業務系ソフトウェアカスタマイズ・開発
                                                    <br/> ・システムテスト
                                                    <br/> ・インタネットサービス
                                                </p>

                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </section>
                <br>
                <!-- Our Team starts -->

                <div class="team-six">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!-- Team Member -->
                            <div class="team-member">
                                <!-- Image -->
                                <img class="img-responsive" src="img/team1.jpg" alt="">
                                <!-- Name -->
                                <h4>Johne Doe</h4>
                                <span class="deg">Creative</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Team Member -->
                            <div class="team-member">
                                <!-- Image -->
                                <img class="img-responsive" src="img/team2.jpg" alt="">
                                <!-- Name -->
                                <h4>Jennifer</h4>
                                <span class="deg">Programmer</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Team Member -->
                            <div class="team-member">
                                <!-- Image -->
                                <img class="img-responsive" src="img/team3.jpg" alt="">
                                <!-- Name -->
                                <h4>Christean</h4>
                                <span class="deg">CEO</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- Team Member -->
                            <div class="team-member">
                                <!-- Image -->
                                <img class="img-responsive" src="img/team4.jpg" alt="">
                                <!-- Name -->
                                <h4>Kerinele rase</h4>
                                <span class="deg">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Our team ends -->


            </div>

        </div>
    </section>
@endsection

@section('js')

@endsection