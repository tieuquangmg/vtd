@extends('frontend.layout')
@section('title')
	<title>株式会社VTD</title>
@endsection
@section('head')

@endsection
@section('content')
	<!-- end header -->
	<section id="banner">

		<!-- Slider -->
		<div id="main-slider" class="flexslider">
			<ul class="slides">
				<li>
					<img src="{{asset('/')}}img/slides/1.jpg" alt=""/>
					<div class="flex-caption">
						<h3>Business Partner</h3>
						<p>Opportunities don't happen. You create them</p>

					</div>
				</li>
				<li>
					<img src="{{asset('/')}}img/slides/2.jpg" alt=""/>
					<div class="flex-caption">
						<h3>Awesome Products</h3>
						<p>It is better to fail in originality than to succeed</p>

					</div>
				</li>
			</ul>
		</div>
		<!-- end slider -->
	</section>

	<section id="content" class="no-padd">
		<div class="main-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>サービス</h2>
							<p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada
								Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis
								porttitor volutpat.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="skill-home">
						<div class="skill-home-solid clearfix">
							<div class="col-md-4 col-sm-6 text-center">
								<span class="icons c1"><i class="fa fa-star"></i></span>
								<div class="box-area">
									<h3>HTML/CSSフロントエンド</h3>
									<p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro
										consequatur aliquam, incidunt eius magni provident</p></div>
							</div>
							<div class="col-md-4 col-sm-6 text-center">
								<span class="icons c2"><i class="fa fa-rocket"></i></span>
								<div class="box-area">
									<h3>ウェブアプリケーション</h3>
									<p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro
										consequatur aliquam, incidunt eius magni provident</p></div>
							</div>
							<div class="col-md-4 col-sm-6 text-center">
								<span class="icons c3"><i class="fa fa-trophy"></i></span>
								<div class="box-area">
									<h3>業務管理システム</h3>
									<p>新規事業展開や業務改善において
										各種システム構築の企画・提案
										要件定義～設計や開発ディレクション
										プロジェクトマネジメント、導入支援など
										一貫したサポートを行います。</p></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</section>

	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>About Us</h2>
						<p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada
							Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor
							volutpat.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
						<p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur
							adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie
							malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis
							porttitor volutpat.</p>

						<ul class="withArrow">
							<li><span class="fa fa-angle-right"></span> Lorem ipsum dolor sit amet</li>
							<li><span class="fa fa-angle-right"></span> consectetur adipiscing elit</li>
							<li><span class="fa fa-angle-right"></span> Curabitur aliquet quam id dui</li>
							<li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li>
						</ul>
						<a href="#" class="btn btn-primary">Learn More</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="{{asset('/')}}img/about.jpg" alt="About Images">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="carousel" class="quote-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
					<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#fade-quote-carousel" data-slide-to="0"></li>
							<li data-target="#fade-quote-carousel" data-slide-to="1"></li>
							<li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
							<li data-target="#fade-quote-carousel" data-slide-to="3"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="item">
								<div class="profile-circle"><img class="img-responsive"
																 src="{{asset('/')}}img/team1.jpg" alt=""></div>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
										eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque
										molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
								</blockquote>
							</div>
							<div class="item">
								<div class="profile-circle"><img class="img-responsive"
																 src="{{asset('/')}}img/team2.jpg" alt=""></div>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
										eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque
										molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
								</blockquote>
							</div>
							<div class="active item">
								<div class="profile-circle"><img class="img-responsive"
																 src="{{asset('/')}}img/team3.jpg" alt=""></div>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
										eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque
										molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
								</blockquote>
							</div>
							<div class="item">
								<div class="profile-circle"><img class="img-responsive"
																 src="{{asset('/')}}img/team4.jpg" alt=""></div>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
										eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque
										molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">

			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>VTD Team member</h2>
				</div>
			</div>

		</div>
	</section>
	<section id="gallery-1" class="content-block section-wrapper gallery-1">
		<div class="container">
			<!-- /.gallery-filter -->

			<div class="row">
				<div id="isotope-gallery-container">
					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas">
						<div class="gallery-item">
							<div class="gallery-thumb">
								<img src="{{asset('/')}}img/works/1.jpg" class="img-responsive" alt="1st gallery Thumb">
								<div class="image-overlay"></div>
								<a href="{{asset('/')}}img/works/1.jpg" class="gallery-zoom"><i
											class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>HERO TEAM</h5>
								</div>
								<div class="editContent">
									<p>Nullam id dolor id nibh ultricies vehicula.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /.gallery-item-wrapper -->
					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper commercial gated">
						<div class="gallery-item">
							<div class="gallery-thumb">
								<img src="{{asset('/')}}img/works/2.jpg" class="img-responsive" alt="2nd gallery Thumb">
								<div class="image-overlay"></div>
								<a href="{{asset('/')}}img/works/2.jpg" class="gallery-zoom"><i
											class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>NINJA TEAM</h5>
								</div>
								<div class="editContent">
									<p>Nullam id dolor id nibh ultricies vehicula.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /.gallery-item-wrapper -->
					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper housing apartments">
						<div class="gallery-item">
							<div class="gallery-thumb">
								<img src="{{asset('/')}}img/works/3.jpg" class="img-responsive" alt="3rd gallery Thumb">
								<div class="image-overlay"></div>
								<a href="{{asset('/')}}img/works/3.jpg" class="gallery-zoom"><i
											class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>SAMURAI TEAM</h5>
								</div>
								<div class="editContent">
									<p>Nullam id dolor id nibh ultricies vehicula.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /.gallery-item-wrapper -->
					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper villas commercial">
						<div class="gallery-item">
							<div class="gallery-thumb">
								<img src="{{asset('/')}}img/works/4.jpg" class="img-responsive" alt="4th gallery Thumb">
								<div class="image-overlay"></div>
								<a href="{{asset('/')}}img/works/4.jpg" class="gallery-zoom"><i
											class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>HOPE TEAM</h5>
								</div>
								<div class="editContent">
									<p>Nullam id dolor id nibh ultricies vehicula.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /.gallery-item-wrapper -->
					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper commercial">
						<div class="gallery-item">
							<div class="gallery-thumb">
								<img src="{{asset('/')}}img/works/5.jpg" class="img-responsive" alt="5th gallery Thumb">
								<div class="image-overlay"></div>
								<a href="{{asset('/')}}img/works/5.jpg" class="gallery-zoom"><i
											class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>COCOMACHI</h5>
								</div>
								<div class="editContent">
									<p>Nullam id dolor id nibh ultricies vehicula.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /.gallery-item-wrapper -->
					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas">
						<div class="gallery-item">
							<div class="gallery-thumb">
								<img src="{{asset('/')}}img/works/6.jpg" class="img-responsive" alt="6th gallery Thumb">
								<div class="image-overlay"></div>
								<a href="{{asset('/')}}img/works/6.jpg" class="gallery-zoom"><i
											class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>HERO-SMALL</h5>
								</div>
								<div class="editContent">
									<p>Nullam id dolor id nibh ultricies vehicula.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /.isotope-gallery-container -->
			</div>
			<!-- /.row -->
			<!-- /.container -->
		</div>
	</section>
@endsection
@section('js')

@endsection