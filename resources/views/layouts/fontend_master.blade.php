
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Community Center Management System</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('font_end/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('font_end/images/icon.png') }}">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('font_end/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/css/venobox.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/css/imagehover.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/font/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/css/font-awesome.min.css') }}">

	<!-- Cusom css -->
	 <link rel="stylesheet" href="{{ asset('font_end/css/style.css') }}">
 	<link rel="stylesheet" href="{{ asset('font_end/css/media.css') }}">
</head>


	<body  data-spy="scroll" data-target=".navbar" data-offset="95">
	<!-=========== Navbar Part Start =========-->
	<nav class="navbar navbar-expand-md navbar-light">
	  <div class="container">
	      <a class="navbar-brand" href="#">
	          <img src="{{ asset('font_end/images/CCMS.png') }}" alt="logo">
	      </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <i class="fa fa-bars"></i>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="#banner" target="_blank">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#package" target="_blank">Packages</a>
	      </li>
				<li class="nav-item">
					<a class="nav-link" href="#service" target="_blank">Service</a>
				</li>
	      <li class="nav-item">
	        <a class="nav-link" href="#video" target="_blank">Video</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#mobile" target="_blank">Mobile Apps</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#blog" target="_blank">Blog</a>
	      </li>
				<li class="nav-item">
				 <a class="nav-link" href="#contact-us" target="_blank">Contact</a>
			 </li>
			 <li class="nav-item dropdown">
					 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							 {{ __('My Account') }} <span class="caret"></span>
							</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									 <a class="dropdown-item nav-link" href="{{ route('login') }}">
												 My Account
									 </a>
									  <hr>
									 <a class="dropdown-item nav-link" href="{{ route('login') }}">
												 Sign In
									 </a>
									  <hr>
									 <a class="dropdown-item nav-link" href="{{ route('customer.index') }}">
												 Create An Account
									 </a>
									  <hr>
									 <a class="dropdown-item nav-link" href="{{ route('user.index') }}">
												 Profile Edit
									 </a>
											 <hr>
										 <a class="dropdown-item nav-link" href="{{ route('logout') }}"
												onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
														 {{ __('Logout') }}
										 </a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											 @csrf
											</form>
											 </div>
					</li>
	    </ul>
	  </div>
	  </div>
	</nav>
	<!-=========== Navbar Part End =========-->

	@yield('contents')


	<!-=========== client Part Start =========-->
	    <section id="contact-us">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>Contact Us</h2>
	                </div>
	                <div class="col-lg-5 col-md-5 address">
										@foreach ($addressing as $addressi)
	                    <address>

	                        <h4>{{ $addressi->address_title }}</h4>
	                        <p>{{ $addressi->address_description }}</p>
	                        <ul class="social-icon">
	                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
	                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	                        </ul>
	                        <ul class="info">
	                            <li><a href="#">{{ $addressi->address_website }}</a></li>
	                            <li><a href="#">{{ $addressi->address_number }}</a></li>
	                            <li><a href="#">{{ $addressi->address_email }}</a></li>
	                        </ul>

	                    </address>
												 @endforeach
	                </div>
	                <div class="col-lg-6 col-md-7 form_area offset-lg-1">
										@if (session('status'))
												<div class="alert alert-success" role="alert">
														{{ session('status') }}
												</div>
										@endif
	                    <form method="post" action="{{ route('contact.store') }}">
													@csrf
	                        <div class="row">

	                            <div class="col-lg-6">
	                                <input type="text" placeholder="Name" name="name"  class="input">
																	@error ('alert_uantity')
				                            <span class="text-danger">{{ $message }}</span>
				                          @enderror
	                            </div>
	                            <div class="col-lg-6">
	                                <input type="email" placeholder="Email" name="email"  class="input">
																	@error ('alert_uantity')
				                            <span class="text-danger">{{ $message }}</span>
				                          @enderror
	                            </div>
	                            <div class="col-lg-12">
	                                <textarea placeholder="Message" name="message" class="input"></textarea>
																	@error ('alert_uantity')
				                            <span class="text-danger">{{ $message }}</span>
				                          @enderror
	                            </div>
	                            <div class="col-lg-12 text-right">
																<button type="submit" value="Send" class="send">Send</button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </section>



	<!-=========== client Part End =========-->
	<a href="#" class="back-top">
	    <i class="fa fa-chevron-up"></i>
	</a>
	<!-=========== hover effect Part Start =========-->

	<!-=========== hover effect Part End =========-->


	<script src="{{ asset('font_end/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ asset('font_end/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('font_end/js/mixitup.min.js') }}"></script>
	<script src="{{ asset('font_end/js/venobox.min.js') }}"></script>
	<script src="{{ asset('font_end/js/slick.min.js') }}"></script>
	<script src="{{ asset('font_end/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('font_end/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('font_end/js/custom.js') }}"></script>
    
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f684ffbf0e7167d001227c3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>
