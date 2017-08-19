<html>
<head>
<meta charset="UTF-8">
	<title>VTD Radom System</title>
	<meta name="description" content="" >
	<meta name="author" content="Hoangth2@gmail.com">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!--Color Style -->
	<link rel="stylesheet" type="text/css" id="color" href="assets/css/colors/default.css"/>

	<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>

	<script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
	</script>
	<script type="text/javascript">
		// place your images in this array
		var random_images_array = <?php echo $img ?>;
		console.log(random_images_array);
		var random_name_array = <?php echo $full_name ?>;
//			['Nguyễn Tuấn Anh', 'Nguyễn Hữu Chính', 'Nguyễn Hữu Dũng','Bùi Anh Quý','Nguyễn Quý Sơn','Nguyễn Hoàng Nam','Đoàn Văn Tú','Phan Văn Quang','Nguyễn Trung Ninh','Vũ Đức Vọng','Bùi Đình Sử','Bùi Ngọc Khải','Ngô Hoài Thu','Chu Văn Hải','Lâm Hoàng Thành'];
		//,'Trần Huy Hoàng' - ,'hoangth.jpg'
		//,'Nguyễn Quốc Dương' - ,'duongnq.jpg'
		//,'Hoàng Đình Long' - ,'longhd.jpg'
		//,'Hoaipt.jpg'
		//,'Phạm Thị Hoài'
		function scrollToResult() {
            $('html, body').animate({ scrollTop: $('#about').offset().top }, 'slow');
            return false;
        }
		var d = 100;
		function myTimer() {
			d = d - 1; 
			random(random_images_array, 'images/team/',d);
			if(d == 0)
			{
				scrollToResult();
				clearInterval(interval);
			}
			
			document.getElementById("digit").innerHTML = d;
		}
        function updateUser(num) {
		    var arrayUser = <?php echo $user_id; ?>;
		    $.ajax({
				url:'{{route('users.ranrom-users')}}',
                data:arrayUser[num],
				method:'post',
				success:function () {
					alert('cap nhat');
                },
                error:function () {

                }
            });
        }
		function random(imgAr, path,d)
		{
		path = path || 'images/team/'; // default path here
			var num = Math.floor( Math.random() * imgAr.length );
			if(d === 0){
                updateUser(num);
            }
			var img = imgAr[ num ];

			var name = random_name_array[num];
			
			var imgStr = '<img style="width: 350px;" src="' + path + img + '" alt = "">';
			var nameStr = img.substr(0, img.lastIndexOf('.')) || img;
			
			var account  = '<p>' + nameStr + '</p>';

			document.getElementById("userName").innerHTML = account;
			document.getElementById("avt").innerHTML = imgStr;
			document.getElementById("fullName").innerHTML = name;
		}
		
		var interval = 0;
		
		function start()
		{
			interval = setInterval(myTimer, 50);
			
		}
	</script>
</head>

<body>

<div id="preloader">
		<div id="loader">
			 <div class="dot"></div>
			 <div class="dot"></div>
			 <div class="dot"></div>
			 <div class="dot"></div>
			 <div class="dot"></div>
			 <div class="dot"></div>
			 <div class="dot"></div>
			 <div class="dot"></div>
			 <div class="lading"></div>
		</div>
	</div><!-- /#preloader -->
	<!-- Preloader End-->

	<!-- Main Menu -->
	<div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
				
		<div class="navbar-header">
			<!-- responsive navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button> <!-- /.navbar-toggle -->
				
		</div> <!-- /.navbar-header -->

		<nav class="collapse navbar-collapse">
			<!-- Main navigation -->
			<ul id="headernavigation" class="nav navbar-nav">
				<li class="active"><a href="#page-top">Home</a></li>	
				<li><a href="#" onclick="start()">Start</a></li>	
			</ul> <!-- /.nav .navbar-nav -->
		</nav> <!-- /.navbar-collapse  -->
	</div><!-- /#main-menu -->
	<!-- Main Menu End -->
	

	<!-- Page Top Section -->
	<section id="page-top" class="section-style parallax-bg" data-background-image="images/background/page-top.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h1 class="site-title">
					VTDVN.NET
				</h1><!-- /.site-title -->
				<h3 class="section-name">
					<span>
						We Are
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					VTDER
				</h2><!-- /.Section-title  -->
				<div id="time_countdown" class="time-count-container">
					<div class="col-sm-12">
						<div class="time-box">
							<div class="time-box-inner dash seconds_dash animated" data-animation="rollIn" data-animation-delay="300">
								<span class="time-number">
									<span id="digit">100</span>
								</span>
								<span class="time-name"></span>
							</div>
						</div>
					</div>
					
				</div><!-- /.time-count-container -->

				<p class="time-until">
					
				</p><!-- /.time-until -->



				<div class="next-section">
					<a class="go-to-about"><span></span></a>
				</div><!-- /.next-section -->
				
			</div><!-- /.container -->
		</div><!-- /.pattern -->		
	</section><!-- /#page-top -->
	<!-- Page Top Section  End -->


	<!-- About Us Section -->
	<section id="about" class="section-style no-parallax-bg" data-background-image="images/background/about-us.jpg">
	
	<div style="position:relative">
	<SCRIPT TYPE="text/javascript">
/**
  * You may use this code for free on any web page provided that 
  * these comment lines and the following credit remain in the code.
  * Cross Browser Fireworks from http://www.javascript-fx.com
  */
/*************************************************/
if(!window.JSFX) JSFX=new Object();

if(!JSFX.createLayer)
{/*** Include Library Code ***/

var ns4 = document.layers;
var ie4 = document.all;
JSFX.objNo=0;

JSFX.getObjId = function(){return "JSFX_obj" + JSFX.objNo++;};

JSFX.createLayer = function(theHtml)
{
	var layerId = JSFX.getObjId();

	document.write(ns4 ? "<LAYER  NAME='"+layerId+"'>"+theHtml+"</LAYER>" : 
				   "<DIV id='"+layerId+"' style='position:absolute'>"+theHtml+"</DIV>" );

	var el = 	document.getElementById	? document.getElementById(layerId) :
			document.all 		? document.all[layerId] :
							  document.layers[layerId];

	if(ns4)
		el.style=el;

	return el;
}
JSFX.fxLayer = function(theHtml)
{
	if(theHtml == null) return;
	this.el = JSFX.createLayer(theHtml);
}
var proto = JSFX.fxLayer.prototype

proto.moveTo     = function(x,y){this.el.style.left = x;this.el.style.top=y;}
proto.setBgColor = function(color) { this.el.style.backgroundColor = color; } 
proto.clip       = function(x1,y1, x2,y2){ this.el.style.clip="rect("+y1+" "+x2+" "+y2+" "+x1+")"; }
if(ns4){
	proto.clip = function(x1,y1, x2,y2){
		this.el.style.clip.top	 =y1;this.el.style.clip.left	=x1;
		this.el.style.clip.bottom=y2;this.el.style.clip.right	=x2;
	}
	proto.setBgColor=function(color) { this.el.bgColor = color; }
}
if(window.opera)
	proto.setBgColor = function(color) { this.el.style.color = color==null?'transparent':color; }

if(window.innerWidth)
{
	gX=function(){return innerWidth;};
	gY=function(){return innerHeight;};
}
else
{
	gX=function(){return document.body.clientWidth;};
	gY=function(){return document.body.clientHeight;};
}

/*** Example extend class ***/
JSFX.fxLayer2 = function(theHtml)
{
	this.superC = JSFX.fxLayer;
	this.superC(theHtml + "C");
}
JSFX.fxLayer2.prototype = new JSFX.fxLayer;
}/*** End Library Code ***/

/*************************************************/

/*** Class Firework extends FxLayer ***/
JSFX.Firework = function(fwImages)
{
	window[ this.id = JSFX.getObjId() ] = this;
	this.imgId = "i" + this.id;
	this.fwImages  = fwImages;
	this.numImages = fwImages.length;
	this.superC = JSFX.fxLayer;
	this.superC("<img src='"+fwImages[0].src+"' name='"+this.imgId+"'>");

	this.img = document.layers ? this.el.document.images[0] : document.images[this.imgId];
	this.step = 0;
	this.timerId = -1;
	this.x = 0;
	this.y = 0;
	this.dx = 0;
	this.dy = 0;
	this.ay = 0.2;
	this.state = "OFF";
}
JSFX.Firework.prototype = new JSFX.fxLayer;

JSFX.Firework.prototype.getMaxDy = function()
{
	var ydiff = gY() - 130;
	var dy    = 1;
	var dist  = 0;
	var ay    = this.ay;
	while(dist<ydiff)
	{
		dist += dy;
		dy+=ay;
	}
	return -dy;
}
JSFX.Firework.prototype.setFrame = function()
{
//	this.img.src=this.fwName+"/"+this.step+".gif";
	this.img.src=this.fwImages[ this.step ].src;
}
JSFX.Firework.prototype.animate = function()
{

	if(this.state=="OFF")
	{
		
		this.step = 0;
		this.x = -200;
		this.y = -200;
		this.moveTo(this.x, this.y);
		this.setFrame();
		if(Math.random() > .95)
		{
			this.x = (gX()-200)*Math.random();
			this.y = (gY()-200)*Math.random();
			this.moveTo(this.x, this.y);
			this.state = "EXPLODE";
		}
	}
	else if(this.state == "EXPLODE")
	{
		this.step++;
		if(this.step < this.numImages)
			this.setFrame();
		else
			this.state="OFF";
	}
}
/*** END Class Firework***/

/*** Class FireworkDisplay extends Object ***/
JSFX.FireworkDisplay = function(n, fwImages, numImages)
{
	window[ this.id = JSFX.getObjId() ] = this;
	this.timerId = -1;
	this.fireworks = new Array();
	this.imgArray = new Array();
	this.loadCount=0;
	this.loadImages(fwImages, numImages);

	for(var i=0 ; i<n ; i++)
		this.fireworks[this.fireworks.length] = new JSFX.Firework(this.imgArray);
}
JSFX.FireworkDisplay.prototype.loadImages = function(fwName, numImages)
{
	for(var i=0 ; i<numImages ; i++)
	{
		this.imgArray[i] = new Image();
		this.imgArray[i].obj = this;
		this.imgArray[i].onload = window[this.id].imageLoaded;
		this.imgArray[i].src = fwName+"/"+i+".gif";
	}
}
JSFX.FireworkDisplay.prototype.imageLoaded = function()
{
	this.obj.loadCount++;
}

JSFX.FireworkDisplay.prototype.animate = function()
{
status = this.loadCount;
	if(this.loadCount < this.imgArray.length)
		return;

	for(var i=0 ; i<this.fireworks.length ; i++)
		this.fireworks[i].animate();
}
JSFX.FireworkDisplay.prototype.start = function()
{
	if(this.timerId == -1)
	{
		this.state = "OFF";
		this.timerId = setInterval("window."+this.id+".animate()", 40);
	}

}
JSFX.FireworkDisplay.prototype.stop = function()
{
	if(this.timerId != -1)
	{
		clearInterval(this.timerId);
		this.timerId = -1;
		for(var i=0 ; i<this.fireworks.length ; i++)
		{
			this.fireworks[i].moveTo(-100, -100);
			this.fireworks[i].step = 0;;
			this.fireworks[i].state = "OFF";
		}	
	}
}
/*** END Class FireworkDisplay***/

JSFX.FWStart = function()
{
	if(JSFX.FWLoad)JSFX.FWLoad();
	myFW1.start();
	myFW2.start();
	myFW3.start();
	myFW4.start();
}
myFW1 = new JSFX.FireworkDisplay(5, "fw05", 21);
myFW2 = new JSFX.FireworkDisplay(5, "fw08", 26);
myFW3 = new JSFX.FireworkDisplay(5, "fw11", 30);
myFW4 = new JSFX.FireworkDisplay(5, "fw13", 15);
JSFX.FWLoad=window.onload;
window.onload=JSFX.FWStart;

</SCRIPT>
	
	
		<div class="pattern height-resize"> 
			<div class="container">
			<!-- /.section-name -->
				<h4 class="section-title">
					 <p id="fullName"></p>
				</h4>

				<div class="team-container">
					<div class="row">
						<div class="col-sm-12">
							<div class="team-member">
								<figure>
									<div id="avt"></div>
									<figcaption>
										<!-- /.member-name -->
										<p class="designation">
										Xin chúc mừng <p id="userName"></p> chia sẻ của ngày tiếp theo
										</p><!-- /.designation -->

									</figcaption>
								</figure>
							</div><!-- /.team-member -->
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
					
				</div><!-- /.team-container -->

				<div class="next-section">
					<a class="go-to-subscribe"><span></span></a>
				</div><!-- /.next-section -->

			</div><!-- /.container -->
		</div><!-- /.pattern -->
		
		</div>
	</section><!-- /#about -->
	<!-- About Us Section End -->

	<!-- Footer Section -->
	<footer id="footer-section">
		<p class="copyright">
			&copy; <a href="http://vtdvn.net/html/kite/">VTD</a> 2017 , All Rights Reserved. Designed by & Developed by <a href="http://vtdvn.net">VTDVN.NET</a>
		</p>
	</footer>
	<!-- Footer Section End -->


	<!-- Color Variation Switcher  -->
	<div id="color-style-switcher">
	  <div>
		<h3>Color palette</h3>
		<ul class="colors">
			<li><a class="color1 active" href="#"></a></li>
			<li><a class="color2" href="#"></a></li>
			<li><a class="color3" href="#"></a></li>
			<li><a class="color4" href="#"></a></li>
			<li><a class="color5" href="#"></a></li>
			<li><a class="color6" href="#"></a></li>
			<li><a class="color7" href="#"></a></li>
			<li><a class="color8" href="#"></a></li>
		</ul>
	  </div>	  
	  <div class="bottom">
		<a href="#" class="settings"><i class="fa fa-cogs icon-2x"></i></a>
	  </div>
	</div>
	<!-- Color Variation Switcher End -->
	<!-- jQuery Library -->
	<!-- Modernizr js -->
	<script type="text/javascript" src="assets/js/modernizr-2.8.0.min.js"></script>
	<!-- Plugins -->
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<!-- Custom JavaScript Functions -->
	<script type="text/javascript" src="assets/js/functions.js"></script>
	<!-- jquery.parallax.js -->
	<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
	<!-- Color Style Switcher -->
	<script type="text/javascript" src="assets/js/switcher.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(window).load(function(){
				$("#page-top").parallax("50%", 0.02);
			})
		})
		
	</script>


</body>
</html>