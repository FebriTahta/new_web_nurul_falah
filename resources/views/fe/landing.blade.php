<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Nurul Falah</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="{{asset('css/base.css')}}"/>
	<link rel="stylesheet" href="css/skeleton.css"/>
	<link rel="stylesheet" href="css/layout.css"/>
	<link rel="stylesheet" href="css/settings.css"/>
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/retina.css"/>
	<link rel="stylesheet" href="css/colorbox.css"/>
	<link rel="stylesheet" href="css/animsition.min.css"/>
	
	<link rel="alternate stylesheet" type="text/css" href="css/colors/color-gold.css" title="1">
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-2.css" title="2">
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-3.css" title="3">
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-4.css" title="4">
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-5.css" title="5">	
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-6.css" title="6">	
    <link rel="alternate stylesheet" type="text/css" href="css/colors/color-7.css" title="7">
	

		
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="{{asset('nf.png')}}">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	<style>
		@media (min-width: 451px) {
			.bnr {
				margin-top: 80px;
			}
			#islamic-days-mobile {
				display: block;
			}
			#islamic-days-desktop {
				display: none;
			}
			#head-event {
				margin-top: 150px !important;
			}
			#spesial-event {
				margin-top: -100px;
			}#youtube {
				margin-top: 50px;
			}
			.strip figure {
				margin-bottom: 5px;
				overflow: hidden;
				position: relative;
				height: 200px !important;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				-ms-border-radius: 5px;
				border-radius: 5px;
				background-color: #ededed;
			}
			#social {
				padding-top: 50px;
			}
		}
		@media (max-width:449px) {
			
			.bnr {
				margin-top: 50px;
			}
			.owner-event {
				display: none;
			}
			.ajax-project-content {
				border-bottom: none;
			}
			.penulis {
				display: block;
			}
			.deskripsi p {
				text-align: justify;
			}
			#islamic-days-mobile {
				display: none;
			}
			.desc-event {
				display: none;
			}
			#islamic-days-desktop {
				display: block;
			}
			#info-event {
				display: none;
			}
			#bidang {
				display: none;
			}
			.foot {
				text-align: left !important;
			}
			#social {
				
			}
			.strip figure {
				margin-bottom: 5px;
				overflow: hidden;
				position: relative;
				height: 115px !important;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				-ms-border-radius: 5px;
				border-radius: 5px;
				background-color: #ededed;
			}

			#youtube {
				margin-top: -50px;
			}
		}

		
    </style>
	{{-- assets 3 --}}
	 <link href="{{asset('assets3/css/style.css')}}" rel="stylesheet">
	 <link href="{{asset('assets3/css/home.css')}}" rel="stylesheet">
</head>
<body>	
	<!-- Primary Page Layout
	================================================== -->

	<div class="animsition">
		<div class="header" id="header-media">
            <nav class="nav container">
                <!-- <a href="#" class="nav__logo">Marlon</a> -->
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link" style="text-align: center">
								<i class="fa fa-fw">&nbsp;&nbsp; </i>
                                <span class="nav__name" style="font-size: 12px">Home</span>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="fa fa-fw">&nbsp;&nbsp; </i>
                                <span class="nav__name" style="font-size: 12px">Media</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="fa fa-fw">&nbsp;&nbsp; </i>
                                <span class="nav__name" style="font-size: 12px">Profile</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="fa fa-fw">&nbsp;&nbsp; </i>
                                <span class="nav__name" style="font-size: 12px">Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
	
    <!-- Switch Panel -->
    <div id="switch">
        <div class="content-switcher" >        
			<p>Color Options:</p>
			<ul class="header">           
				<li><a href="#" onClick="setActiveStyleSheet('1'); return false;" class="button color switch" style="background-color:#cfa144"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('2'); return false;" class="button color switch" style="background-color:#9b59b6"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('3'); return false;" class="button color switch" style="background-color:#2ecc71"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('4'); return false;" class="button color switch" style="background-color:#e74c3c"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('5'); return false;" class="button color switch" style="background-color:#34495e"></a></li> 
				<li><a href="#" onClick="setActiveStyleSheet('6'); return false;" class="button color switch" style="background-color:#f1c40f"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('7'); return false;" class="button color switch" style="background-color:#3498db"></a></li>
			</ul>        
			<div class="clear"></div>    
			<div id="hide">
				<img  src="{{asset('images/close.png')}}" alt="" /> 
			</div>
        </div>
	</div>
	<div id="show" style="display: block;">
        <div id="setting"></div>
    </div>
    <!-- Switch Panel -->	

	<!-- MENU
    ================================================== -->	
	
	<div class="header-top" >
	{{-- style="background-image: linear-gradient(to right, #75b2e4, #63f3bc);" --}}
		<header class="cd-main-header">
			<a class="cd-logo animsition-link" href="/"><img src="{{asset('nf_logo.png')}}" alt="Logo"></a>

			<ul class="cd-header-buttons">
				<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
				<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
			</ul> <!-- cd-header-buttons -->
		</header>
		
		<nav class="cd-nav">
			<ul id="cd-primary-nav" class="cd-primary-nav is-fixed" style="align-content: center;" sty
			>
				<li>
					<a href="/" class="animsition-link">Home</a>
				</li>
				<li class="has-children">
					<a href="#">Events</a>
					<ul class="cd-secondary-nav is-hidden">
						<li class="go-back"><a href="#">Menu</a></li>
						{{-- <li class="see-all"><a href="#">PILIH MENU</a></li> --}}

						<li class="has-children">
							<a href="#">Events</a>
							<ul class="is-hidden">
								<li class="go-back"><a href="#">Events</a></li>
								<li><a href="/" class="animsition-link">Special Ramadhan</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Shop</a>

					<ul class="cd-nav-gallery is-hidden">
						<li class="go-back"><a href="#">Menu</a></li>
						<li class="see-all"><a href="/" class="animsition-link">Browse All</a></li>
						<li>
							<a class="cd-nav-item animsition-link" href="/">
								<img src="images/shop1.jpg" alt="Product Image">
								<h3>men</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="/">
								<img src="images/shop2.jpg" alt="Product Image">
								<h3>women</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="/">
								<img src="images/shop3.jpg" alt="Product Image">
								<h3>underwear</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="/">
								<img src="images/shop4.jpg" alt="Product Image">
								<h3>jewellry</h3>
							</a>
						</li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Shortcodes</a>
					<ul class="cd-nav-icons is-hidden">
						<li class="go-back"><a href="#">Menu</a></li>
						<li class="see-all"><a href=/" class="animsition-link">More Shortcodes</a></li>
						<li>
							<a class="cd-nav-item item-1 animsition-link" href="/">
								<h3>Buttons</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-2 animsition-link" href="/">
								<h3>Icons</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-3 animsition-link" href="/">
								<h3>Counters</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-4 animsition-link" href="/">
								<h3>Carousels</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-5 animsition-link" href="/">
								<h3>Media</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-6 animsition-link" href="/">
								<h3>Blockquotes</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-7 animsition-link" href="/">
								<h3>Process Steps</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-8 animsition-link" href="/">
								<h3>Alert Boxes</h3>
								<p>This is the page description</p>
							</a>
						</li>
						
						<li>
							<a class="cd-nav-item item-9 animsition-link" href="/">
								<h3>Tabs</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-10 animsition-link" href="/">
								<h3>Pricing Boxes</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-11 animsition-link" href="/">
								<h3>Clients</h3>
								<p>This is the page description</p>
							</a>
						</li>
						
						<li>
							<a class="cd-nav-item item-12 animsition-link" href="/">
								<h3>Lightbox</h3>
								<p>This is the page description</p>
							</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="/" class="animsition-link">Contact</a>
				</li>
				
				<li>
					<a href="/" class="animsition-link"><i class="fa fa-fw">&#xf07a;</i>cart</a>
				</li>
				
			</ul> <!-- primary-nav -->
		</nav> <!-- cd-nav -->

		<div id="cd-search" class="cd-search">
			<form>
				<input type="search" placeholder="Search...">
			</form>
		</div>	
	
	</div>
	
	<main class="cd-main-content">
	
	<!-- HOME SECTION
    ================================================== -->
		<section class="home">
			<div class="slider-container">
				<div class="tp-banner-container">
					<div class="tp-banner" >
						<ul>
							<li class="bnr" data-transition="fade"  data-slotamount="1" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
                                <img
                                    src="img1.png"
                                    alt="slidebg1" data-lazyload="img1.png" data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <div class="tp-caption black-heavy-2 randomrotate tp-resizeme" style="text-align: left;"
										data-speed="200"
										data-start="300"
										data-easing="Power3.easeInOut"
										data-elementdelay="0.1"
										data-endelementdelay="0.1"
										style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
										<span class="slider-text-color" style="margin-left: 900px">welcome</span> To <br>
                                        <span class="slider-text-color" style="margin-left: 900px">Nurul Falah</span>
									</div>
									<div class="tp-caption sfb ltl tp-resizeme"
										data-x="375"
										data-y="210"
										data-speed="500"
										data-start="500"
										data-easing="Power3.easeInOut"
										data-elementdelay="0.1"
										data-endelementdelay="0.1"
										style="z-index: 400; max-width: auto; max-height: auto; white-space: nowrap;">
										<img src="images/iphone.png" alt="">
									</div>						

							</li>
							<li class="bnr" data-transition="fade" data-slotamount="1" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

								<img 
                                    src="img2.jpg"
                                    alt="slidebg2" data-lazyload="img2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								
									<div class="tp-caption black-heavy-2 randomrotate tp-resizeme"
										data-speed="200"
										data-start="300"
										data-easing="Power3.easeInOut"
										data-elementdelay="0.1"
										data-endelementdelay="0.1"
										style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
										<span class="slider-text-color" >responsive</span> and retina ready
									</div>
									<div class="tp-caption black-small randomrotate tp-resizeme"
										data-speed="200"
										data-start="300"
										data-easing="Power3.easeInOut"
										data-splitin="chars"
										data-splitout="none"
										data-elementdelay="0.1"
										data-endelementdelay="0.1"
										style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
										WE ARE RELENTLESS IN MOVING BOUNDARIES
									</div>
								{{-- <a href="#"><div class="button-slider">discover</div></a>	 --}}

							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>		

		{{-- <section class="home section white-section section-padding-bottom section-home-padding-top">
			
		</section> --}}
		{{-- <section id="bidang" class="section bg_gray" style="margin-top: 70px; padding: 0;">
			<div class="container">
				<div class="sixteen columns" style="margin-bottom: 30px; margin-top: 30px">
					<ul id="owl-logos" class="owl-carousel owl-theme">
						<li><img style="width: 100px; height: auto" src="{{asset('LPQ.png')}}" alt="" /></li>
						<li><img style="width: 100px; height: auto" src="{{asset('TLWTI.png')}}" alt="" /></li>
						<li><img style="width: 100px; height: auto" src="{{asset('DGTKI.png')}}" alt="" /></li>
						<li><img style="width: 100px; height: auto" src="{{asset('LAZIS.png')}}" alt="" /></li>
						<li><img style="width: 100px; height: auto" src="{{asset('LPQ.png')}}" alt="" /></li>
					</ul>
				</div>
			</div>
		</section> --}}
		

	<!-- FOOTER
    ================================================== -->	
	
		<section  class="section footer-1 section-padding-top-bottom">	
			<div class="container" >
				<div  class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.8s">
					<a href="/" class="animsition-link">
						<img src="{{asset('nf_logo_white.png')}}" style="width: 200px" alt="">
					</a>
				</div>
				<div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.3s">
					<h6 class="foot"><i class="icon-footer">&#xf015;</i>Lokasi Kami</h6>
					<p class="foot"><i class="icon-footer">&#xf041; </i> Jl. Ketintang Timur PTT VB, Pesantren Nurul Falah</p>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.3s">
					<h6 class="foot"><i class="icon-footer">&#xf095;</i>Hubungi Kami</h6>
					<p class="foot"><i class="icon-footer">&#xf098;</i> (031) 8281278</p>
					<p class="foot"><i class="icon-footer">&#xf0e0;</i><a href="mailto:pes_nf@yahoo.co.id" title="">pes_nf@yahoo.co.id</a></p>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.8s">
					
					<p class="foot"><i class="icon-footer">&#xf09a;</i><a href="/" title="">facebook</a></p>
					<p class="foot"><i class="icon-footer">&#xf099;</i><a href="/" title="">twitter</a></p>
					<p class="foot"><i class="icon-footer">&#xf16d;</i><a href="/" title="">instagram</a></p>
				</div>	
			</div>
		</section>
		<section class="section footer-bottom">	
			<div class="container">
				<div class="sixteen columns">
					<p>© ALL RIGHTS RESERVED. MADE BY ME</p>
				</div>	
			</div>
		</section>



		
	</main>		

	<div class="scroll-to-top">&#xf106;</div>
	
	
	</div>
	
	
	<script src="{{asset('assets3/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('assets3/js/common_func.js')}}"></script>
	<!-- JAVASCRIPT
    ================================================== -->
	
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
{{-- <script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script> --}}
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>		
<script type="text/javascript" src="js/jquery.animsition.min.js"></script>
{{-- <script type="text/javascript" src="js/custom-slider-project.js"></script>   --}}
<script type="text/javascript">
(function($) { "use strict";
	$(document).ready(function() {
	  
	  $(".animsition").animsition({
	  
		inClass               :   'zoom-in-sm',
		outClass              :   'zoom-out-sm',
		inDuration            :    1500,
		outDuration           :    800,
		linkElement           :   '.animsition-link', 
		// e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
		loading               :    true,
		loadingParentElement  :   'body', //animsition wrapper element
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
		//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		
		overlay               :   false,
		
		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
	  });
	});  
})(jQuery);
</script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>   
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>	
<script type="text/javascript" src="js/jquery.hidescroll.min.js"></script>	
<script type="text/javascript">
	$('.header-top').hidescroll();
</script>
{{-- <script type="text/javascript" src="js/smoothScroll.js"></script> --}}
<script type="text/javascript" src="js/isotope.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/scrollReveal.js"></script>
<script type="text/javascript" src="js/masonry.js"></script> 
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript">
(function($) { "use strict";
      window.scrollReveal = new scrollReveal();
})(jQuery);
</script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript"> 
(function($) { "use strict";          
			jQuery(document).ready(function() {
				var offset = 450;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.scroll-to-top').fadeIn(duration);
					} else {
						jQuery('.scroll-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.scroll-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});
})(jQuery);
</script>
<script type="text/javascript" src="js/styleswitcher.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/custom-portfolio-home-1.js"></script>  	  
{{-- <script type="text/javascript" src="js/custom-blog-grid-right.js"></script>  

<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/custom-carousels.js"></script>  	  
<script type="text/javascript" src="js/custom-clients.js"></script>   --}}
<!-- End Document
================================================== -->

</body>
</html>