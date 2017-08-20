@extends('frontend.layout')
@section('title')
	<title>株式会社VTD</title>
@endsection
@section('head')
@endsection
@section('content')
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
								<input type="text" class="form-control" placeholder="会社名" id="name" required
									   data-validation-required-message="Please enter company name"/>
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<input type="email" class="form-control" placeholder="メールアドレス" id="email" required
									   data-validation-required-message="Please enter your email"/>
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<textarea rows="10" cols="100" class="form-control" placeholder="お問合わせ内容" id="message"
										  required data-validation-required-message="Please enter your message"
										  minlength="5" data-validation-minlength-message="Min 5 characters"
										  maxlength="999" style="resize:none"></textarea>
							</div>
						</div>
						<div id="success"></div>
						<!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary pull-right">送信</button>
						<br/>
					</form>
				</div>
				<div class="col-md-6">
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<div style="overflow:hidden;height:500px;width:600px;">
						<div id="gmap_canvas" style="height:500px;width:600px;"></div>
						<style>
							#gmap_canvas img {
								max-width: none !important;
								background: none !important
							}
						</style>
						<a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div>
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
							google.maps.event.addListener(marker, "click", function () {
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
@endsection
@section('js')
	<script src="{{asset('/')}}js/jqBootstrapValidation.js"></script>
	<script src="{{asset('/')}}js/contact_me.js"></script>
@endsection