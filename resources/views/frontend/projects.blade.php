@extends('frontend.layout')
@section('title')
	<title>株式会社VTD</title>
@endsection
@section('head')

@endsection
@section('content')
	<section id="inner-headline" class="header-cus">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="pageTitle">プロジェクト</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="about-logo">
						<h3>Voluptatem Accusantium Doloremque</h3>
						<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
						<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Start Gallery 1-2 -->
	<section id="gallery-1" class="content-block section-wrapper gallery-1">
		<div class="container">

			<div class="editContent">
				<ul class="filter">
					<li class="active"><a href="#" data-filter="*">All</a></li>
					<li><a href="#" data-filter=".apartments">Apartments</a></li>
					<li><a href="#" data-filter=".villas">Villas</a></li>
					<li><a href="#" data-filter=".commercial">commercial</a></li>
					<li><a href="#" data-filter=".gated">Gated</a></li>
					<li><a href="#" data-filter=".housing">Housing</a></li>
				</ul>
			</div>
			<!-- /.gallery-filter -->

			<div class="row">
				<div id="isotope-gallery-container">
					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas">
						<div class="gallery-item">
							<div class="gallery-thumb">
								<img src="img/works/1.jpg" class="img-responsive" alt="1st gallery Thumb">
								<div class="image-overlay"></div>
								<a href="img/works/1.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>1st gallery Item</h5>
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
								<img src="img/works/2.jpg" class="img-responsive" alt="2nd gallery Thumb">
								<div class="image-overlay"></div>
								<a href="img/works/2.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>2nd gallery Item</h5>
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
								<img src="img/works/3.jpg" class="img-responsive" alt="3rd gallery Thumb">
								<div class="image-overlay"></div>
								<a href="img/works/3.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>3rd gallery Item</h5>
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
								<img src="img/works/4.jpg" class="img-responsive" alt="4th gallery Thumb">
								<div class="image-overlay"></div>
								<a href="img/works/4.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>4th gallery Item</h5>
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
								<img src="img/works/5.jpg" class="img-responsive" alt="5th gallery Thumb">
								<div class="image-overlay"></div>
								<a href="img/works/5.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>5th gallery Item</h5>
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
								<img src="img/works/6.jpg" class="img-responsive" alt="6th gallery Thumb">
								<div class="image-overlay"></div>
								<a href="img/works/6.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
								<a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
							</div>
							<div class="gallery-details">
								<div class="editContent">
									<h5>6th gallery Item</h5>
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
	<!--// End Gallery 1-2 -->
	@endsection
@section('js')

@endsection