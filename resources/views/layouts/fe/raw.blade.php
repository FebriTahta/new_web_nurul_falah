<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Clymene</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css"/>
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
	{{-- <link rel="shortcut icon" href="favicon.png"> --}}
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
		}
		@media (max-width:450px) {
			
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
	
	<div class="header-top">
	
		<header class="cd-main-header">
			<a class="cd-logo animsition-link" href="index.html"><img src="{{asset('nf_logo.png')}}" alt="Logo"></a>

			<ul class="cd-header-buttons">
				<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
				<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
			</ul> <!-- cd-header-buttons -->
		</header>
		
		<nav class="cd-nav">
			<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
				<li>
					<a href="index.html" class="animsition-link">Home</a>
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
								<li><a href="slider-project.html" class="animsition-link">Special Ramadhan</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Shop</a>

					<ul class="cd-nav-gallery is-hidden">
						<li class="go-back"><a href="#">Menu</a></li>
						<li class="see-all"><a href="shop-all.html" class="animsition-link">Browse All</a></li>
						<li>
							<a class="cd-nav-item animsition-link" href="shop-1.html">
								<img src="images/shop1.jpg" alt="Product Image">
								<h3>men</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="shop-2.html">
								<img src="images/shop2.jpg" alt="Product Image">
								<h3>women</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="shop-3.html">
								<img src="images/shop3.jpg" alt="Product Image">
								<h3>underwear</h3>
							</a>
						</li>

						<li>
							<a class="cd-nav-item animsition-link" href="shop-4.html">
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
						<li class="see-all"><a href="more-shortcodes.html" class="animsition-link">More Shortcodes</a></li>
						<li>
							<a class="cd-nav-item item-1 animsition-link" href="buttons.html">
								<h3>Buttons</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-2 animsition-link" href="icons.html">
								<h3>Icons</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-3 animsition-link" href="counters.html">
								<h3>Counters</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-4 animsition-link" href="carousels.html">
								<h3>Carousels</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-5 animsition-link" href="media.html">
								<h3>Media</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-6 animsition-link" href="blockquotes.html">
								<h3>Blockquotes</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-7 animsition-link" href="process.html">
								<h3>Process Steps</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-8 animsition-link" href="alert.html">
								<h3>Alert Boxes</h3>
								<p>This is the page description</p>
							</a>
						</li>
						
						<li>
							<a class="cd-nav-item item-9 animsition-link" href="tabs.html">
								<h3>Tabs</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-10 animsition-link" href="pricing.html">
								<h3>Pricing Boxes</h3>
								<p>This is the page description</p>
							</a>
						</li>

						<li>
							<a class="cd-nav-item item-11 animsition-link" href="clients.html">
								<h3>Clients</h3>
								<p>This is the page description</p>
							</a>
						</li>
						
						<li>
							<a class="cd-nav-item item-12 animsition-link" href="lightbox.html">
								<h3>Lightbox</h3>
								<p>This is the page description</p>
							</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="contact.html" class="animsition-link">Contact</a>
				</li>
				
				<li>
					<a href="cart.html" class="animsition-link"><i class="fa fa-fw">&#xf07a;</i>cart</a>
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

		<section class="home section white-section section-padding-bottom section-home-padding-top">
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title" style="text-align: center">
						<h1>special ramadhan</h1>
						<a href="#" class="column icons-box muted" style="text-transform: uppercase; font-size: 12px">
							<i class="fa fa-fw"></i> <span class="muter" style="margin-right: 10px">informasi selengkapnya</span> <i class="fa fa-fw"></i>
						</a>
					</div>
				</div>
				<div class="eleven columns">
					<div id="owl-portfolio-slider" class="owl-carousel owl-theme">
						<div class="item" style="display: block">
							<img src="images/portfolio/big/2.jpg" alt="" style="margin-bottom: 10px">
							{{-- <a href="#" class="button-shortcodes text-size-1 text-padding-5 version-1"><span></span> Nurul Falah</a> --}}
							<a href="#" class="one-third ">
								<i class="fa fa-fw"></i>
								<span class="muted">Agenda Kegiatan Nurul Falah</span>
							</a>
						</div>
						<div class="item">
							<img src="images/portfolio/big/3.jpg" alt="" style="margin-bottom: 10px">
							<a href="#" class="one-third ">
								<i class="fa fa-fw"></i>
								<span class="muted">Agenda Events Bidang Tertentu</span>
							</a>
						</div>
						<div class="item">
							<img src="images/portfolio/big/4.jpg" alt="" style="margin-bottom: 10px">
							<a href="#" class="one-third ">
								<i class="fa fa-fw"></i>
								<span class="muted">Agenda Events Bidang Tertentu</span>
							</a>
						</div>
					</div>
				</div>
				<div class="five columns">
					<div class="ajax-project-content">
						<p class="desc-event">Berikut adalah events / acara special yang kami selenggarakan dalam kurun waktu tertentu.</p>
						<div class="ajax-project-info owner-event">
							<div class="ajax-info"><span>&#xf0c0;</span><strong>Owner:</strong> NURUL FALAH</div>
							<div class="ajax-info"><span>&#xf017;</span><strong>Waktu :</strong> BULAN RAMADHAN</div>
							<div class="ajax-info"><span>&#xf168;</span><strong>Tema &nbsp;&nbsp;&nbsp;:</strong> SPECIAL RAMADHAN</div>
						</div>
						<a href="#" id="info-event"><div class="ajax-link">informasi selengkapnya</div></a>
					</div>
				</div>
			</div>
		</section>
		
		<div class="bg_gray">
			<div class="container">
				<br>
				<div class="main_title">
					<i class="fa fa-fw" style="font-size: 40px; color: red"> YouTube</i>
					<a href="#0" class="muted">Nurul Falah Media</a>
				</div>
				<div class="owl-carousel owl-theme carousel_4">
					<div class="item">
						<div class="strip">
							<figure>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/j2rVkTHTOIw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<a href="https://www.youtube.com/embed/j2rVkTHTOIw" target="_blank" class="strip_info"></a>
							</figure>
							<ul>
								<li><span class="take yes">Tarhib Ramadhan</span> </li>
								<li></li>
							</ul>
						</div>
					</div>
					
				</div>
				<!-- /carousel -->
				<br>
			</div>
		</div>

	<!-- SECTION
    ================================================== -->	
	
		<section class="section">	
			<div class="container">
				<div class="sixteen columns" style="margin-top: 20px">
					<div class="section-title">
						<h1>berita terkini</h1>
					</div>
				</div>
				<div class="two-thirds column">
					<div class="blog-big-wrapper deskripsi">
						<img src="images/blog/9.jpg" alt="">
						<div class="bottom-text" style="font-size: 14px">17th Oct 2014</div>
						<a href="image-post.html" class="animsition-link"><h5>THIS IS A STANDARD POST WITH A PREVIEW IMAGE</h5></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing
							asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus. asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
							 <br>
							 <p>
								asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus. asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.
								elit....
							 </p>
						<a href="image-post.html" class="animsition-link"><div class="link-to-post">selengkapnya <span></span></div></a>
					</div>
					{{-- <a href="" style="width: 100%; text-align: center; margin-top: 170px" class="button-shortcodes text-size-1 text-padding-1 version-1">baca berita lainnya <span class="right-icon"></span></a> --}}
				</div>
				<div class="one-third column">
					<div class="full-image">
						<div class="blog-big-wrapper deskripsi">
							<img src="images/blog/9.jpg" alt="">
							<div class="bottom-text" style="font-size: 14px">17th Oct 2014</div>
							<a href="image-post.html" class="animsition-link"><h5>THIS IS A STANDARD POST</h5></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<a href="image-post.html" class="animsition-link"><div class="link-to-post">selengkapnya <span></span></div></a>
							
						</div>
					</div>
				</div>
				<div class="one-third column">
					<div class="full-image deskripsi">
						<div class="blog-big-wrapper">
							<img src="images/blog/9.jpg" alt="">
							<div class="bottom-text" style="font-size: 14px">17th Oct 2014</div>
							<a href="image-post.html" class="animsition-link"><h5>THIS IS A STANDARD POST</h5></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<a href="image-post.html" class="animsition-link"><div class="link-to-post">selengkapnya <span></span></div></a>
						</div>
					</div>
					{{-- <a href="" style="width: 100%; text-align: center; margin-top: 50px" class="button-shortcodes text-size-1 text-padding-1 version-1">baca berita lainnya <span class="right-icon"></span></a> --}}
				</div>
				<div class="clear"></div>
			</div>
			<div class="call-to-action-1" style="background-color: #6cb6a3">
				<h5>BACA BERITA SELENGKAPNYA DIBAWAH INI</h5>
				<a href="#" class="button-1 animsition-link" style="border-color: white">BACA SELENGKAPNYA</a>
			</div>
		</section>	
		

	<!-- SECTION
    ================================================== -->	
	
		{{-- <section class="section white-section  section-padding-top-bottom">
			<div class="container">
				
			</div>
		</section>		 --}}
		<section class="section white-section section-padding-top-bottom">
		
			<div class="container">
				<div class="sixteen columns">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current" data-filter="*" title="">Show All</a></li>
							<li><a href="#" data-filter=".photo" title="">Photo</a></li>
							<li><a href="#" data-filter=".media" title="">Media</a></li>
							<li><a href="#" data-filter=".news" title="">News</a></li>
							<li><a href="#" data-filter=".links" title="">Links</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="clear"></div>
			
			<div class="container">
				<div class="twelve columns remove-top">
					<div class="blog-wrapper">
						<div id="blog-grid-masonry" class="isotope" style="position: relative; overflow: hidden; height: 3373px;">
							<div class="container">
								
							</div>
							<a href="#" class="animsition-link">
								<div class="blog-box-3 half-blog-width photo">
									<div class="blog-box-1 grey-section">
										<img src="images/blog/1.jpg"  alt="">
										<div class="blog-date-1" style="background-color: #6cb6a3; border-radius: 10px">Hikmah</div>
										<h6>Latest post</h6>
										<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
										<div class="link">&#xf178;</div>
									</div>
								</div>
							</a>
							
							<a href="#" class="animsition-link">
								<div class="blog-box-3 half-blog-width media">
									<div class="blog-box-1 grey-section">
										<img src="images/blog/2.jpg"  alt="">
										<div class="blog-date-1" style="background-color: #6cb6a3; border-radius: 10px">Hikmah</div>
										<h6>Latest post</h6>
										<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
										<div class="link"> &#xf178; Selengkapnya</div>
									</div>
								</div>
							</a>

							<a href="#" class="animsition-link">
								<div class="blog-box-3 half-blog-width news">
									<div class="blog-box-1 grey-section">
										<img src="images/blog/1.jpg"  alt="">
										<div class="blog-date-1" style="background-color: #6cb6a3; border-radius: 10px">Hikmah</div>
										<h6>Latest post</h6>
										<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
										<div class="link"> &#xf178; Selengkapnya</div>
									</div>
								</div>
							</a>

							<a href="#" class="animsition-link">
								<div class="blog-box-3 half-blog-width links">
									<div class="blog-box-1 grey-section">
										<img src="images/blog/1.jpg"  alt="">
										<div class="blog-date-1" style="background-color: #6cb6a3; border-radius: 10px">Hikmah</div>
										<h6>Latest post</h6>
										<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
										<div class="link"> &#xf178; Selengkapnya</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="four columns">
					<div class="post-sidebar">
						<h6 style="text-align: center">JADWAL SHOLAT</h6>
						<iframe id="iframe" title="prayerWidget" class="widget-m-top" style=" height: 358px; border: 1px solid #ddd;" scrolling="no" src="https://www.islamicfinder.org/prayer-widget/1625822/shafi/11/0/20.0/18.0"> </iframe>
						<div class="separator-sidebar"></div>
						<h6 style="text-align: center">HARI SPESIAL ISLAM</h6>
						<ul id="islamic-days-desktop">
							<iframe  style="height: 460px; border: 1px solid #ddd;" scrolling="no" src="https://www.islamicfinder.org/specialislamicdays"> </iframe>
						</ul>
						<ul id="islamic-days-mobile">
							<iframe style="height: 418px; border: 1px solid #ddd;" scrolling="no" src="https://www.islamicfinder.org/specialislamicdays"> </iframe>
						</ul>
						<div class="separator-sidebar"></div>
					</div>
				</div>
			</div>
			<div class="call-to-action-1" style="background-color: #6cb6a3;">
				<h5>ARTIKEL SELENGKAPNYA</h5>
				<a href="#" class="button-1 animsition-link" style="border-color: white">BACA</a>
			</div>
		</section>
		
		
	<!-- SECTION
    ================================================== -->	
	
		<section class="section section-padding-top-bottom text-white">
			
			
		</section>
			

	<!-- FOOTER
    ================================================== -->	
	
		<section class="section footer-1 section-padding-top-bottom">	
			<div class="container">
				<div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.8s">
					<a href="index.html" class="animsition-link"><div class="logo-footer"></div></a>
				</div>
				<div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.3s">
					<h6><i class="icon-footer">&#xf041;</i>Kraljevo</h6>
					<p>Nikole Tesle 41, Serbia<br/>
					+381 602037802</p>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.3s">
					<h6><i class="icon-footer">&#xf041;</i>Belgrade</h6>
					<p>Heroja Maricica 23, Serbia<br/>
					+381 642342802</p>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.8s">
					<div class="social-bottom">
						<ul class="list-social">
							<li class="icon-soc">
								<a href="#">&#xf099;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf09a;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf09b;</a>
							</li>
							<li class="icon-soc">
								<a href="#">&#xf0d5;</a>
							</li>
						</ul>	
					</div>
					<p><i class="icon-footer">&#xf0e0;</i><a href="mailto:office@yoursite.com" title="">office@yoursite.com</a></p>
				</div>	
			</div>
		</section>
		<section class="section footer-bottom">	
			<div class="container">
				<div class="sixteen columns">
					<p>© ALL RIGHTS RESERVED. MADE BY IG DESIGN 2014</p>
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
<script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>		
<script type="text/javascript" src="js/jquery.animsition.min.js"></script>
<script type="text/javascript" src="js/custom-slider-project.js"></script>  
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
<script type="text/javascript" src="js/custom-blog-grid-right.js"></script>  
<!-- End Document
================================================== -->

</body>
</html>