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

<!--========================================internal CSS======================================-->
<style>
    .package_1{
      background: url('../font_end/images/pic1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 900px;
        position: relative;

    }
    .wrapper{
        width: 960px;
        margin: 0 auto;
        position: absolute;
    }
 .package_1 .wrapper .package{
        width: 960px;
        height: 680px;
        background: #e8eaf0;
        position: absolute;
        border-radius: 10%;
        margin-top: 200px;
        margin-left: 150px;
        float: left;
    }


    .package_1 .wrapper .package .pack_img{
        width: 960px;
        height: 350px;
        float: left;
    }
    .package_1 .wrapper .package .pack_img h1{
    font-size: 36px;
    font-weight: 500;
    font-family: 'Raleway', sans-serif;
    color: #000;
    padding-left: 300px;
    }
    .package_1 .wrapper .package .pack_img .item{
        float: left;
        height: 300px;
        width: 300px;
    }
    .package_1 .wrapper .package .pack_img .item img{
        border-radius: 20%;
        width: 400px;
        height: 300px;
        margin-left: 300px;
        margin-top: 30px;
        
    }
    .package_1 .wrapper .package .pack_img .item b{
    font-size: 25px;
    font-weight: 500;
    font-family: 'Raleway', sans-serif;
    color: #9d9999;
    padding-left: 100px;
    padding-top: 90px;

    }

    .package_1 .wrapper .package .pack_description{
        width: 960px;
        height: 150px;
        float: left;
    }

    .package_1 .wrapper .package .pack_description .description{
        float: left;
        height: 100px;
        width: 300px;
        background: #fff;
        border-radius: 5%;
        margin-left: 350px;
        margin-top: 50px;
    }
    .package_1 .wrapper .package .pack_description .description p{
        font-size: 18px;
        font-weight: 500;
        font-family: 'Raleway', sans-serif;
        color: #9d9999;
        line-height: 18px;
        text-align: center;
    }

     .package_1 .wrapper .package .pack_description .description  b{
    font-size: 25px;
    font-weight: 500;
    font-family: 'Raleway', sans-serif;
    color: #000;
    padding-left: 100px;
    padding-top: 90px;

    }

    .package_1 .wrapper .package .pack_price{
        width: 960px;
        height: 100px;
        float: left;
        margin-left: 350px;
        margin-top: 20px;
    }

    .package_1 .wrapper .package .pack_price .price{
        float: left;
        height: 80px;
        width: 300px;
        background: #fff;
        border-radius: 20%;
        margin-left: 15px;
        margin-top: 5px;
    }
    .package_1 .wrapper .package .pack_price .price h1{
    font-size: 22px;
    font-weight: 700;
    font-family: 'Raleway', sans-serif;
    color: #9d9999;
    text-align: center;
    line-height: 80px;
    }

</style>

<!--========================================internal CSS======================================-->

<!--=====================Package work start=================================-->

<div class="package_1"  >

  
    <div class="wrapper">
        <div class="package">
            <div class="pack_img">
            <h1><u>{{ $packagest->package_title }}</u></h1>
            <div class="item">
                <img src="{{ asset('uploads\Package_imegrs') }}/{{ $packagest->pack_imegrs }}"  alt="">
            </div>
            </div>
            <div class="pack_description">
               <div class="description">
                   <p>{{ $packagest->pack_description }}</p>
               </div>
            </div>
            <div class="pack_price">
                <div class="price">
                    <h1> Per Person: <strong style="color: red;">{{ $packagest->pack_price }}</strong> Only</h1>
                </div>
        </div>
    </div>
</div>
</div>


<!--=======================Back-top Button======================================-->
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
</body>
</html>
