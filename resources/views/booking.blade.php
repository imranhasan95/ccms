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


<style>

    b{
        font-size: 20px;
        font-family: sans-serif;
        color: rgba(0, 0, 0, 0.68);
        padding-left: 50px;
    }

    input{
        width: 400px;
        height: 45px;
        background: #d6d3d3;
        padding-left: 20px;
        margin-left: 10px;
        border: 0px;
        border-radius: 50px;
        font-size: 20px;
        font-family: sans-serif;
        text-transform: capitalize;

    }
    button{
        width: 200px;
        height: 50px;
        line-height: 50px;
        background: #f79e10;
        border: 0px;
        border-radius: 50px;
        margin-top: 5px;
        margin-left:100px;
        transition: all linear 0.4s;

    }

    button:hover{
      background: #fff;
     color: #e80d0d;
    }

    i{
        font-size: 20px;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        line-height: 30px;
        margin-left:10px;
        padding-top: 8px;
    }

    select{
        width: 400px;
        height: 45px;
        background: #d6d3d3;
        padding-left: 20px;
        margin-left: 10px;
        border: 0px;
        border-radius: 50px;
        font-size: 20px;
        font-family: sans-serif;
        text-transform: capitalize;
    }

</style>

<!--=====================Form Start=================================-->
<form  method="post" action="{{  route('booking.store') }}">
  @csrf
    <table width="100%" height="600" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td width="800" height="800" style="background:url({{ asset('font_end/images/pic2.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <table  width="800" height="900" cellpadding="0" cellspacing="0" border="0" align="center" style="margin-left: 250px; margin-top: 120px; border-radius: 5px;" bgcolor="#fff" >

                <tr>
                    <td width="800" height="50">
                        <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Name :</b></td>
                                     <td width="500" height="50">
                                         <input type="text" name="name" id="name" placeholder="Enter Your First Name">
                                     </td>
                                 </tr>
                             </table>
                    </td>
                </tr>
<!--               1st-->
              <tr>
                    <td width="800" height="50">
                          <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Email :</b></td>
                                     <td width="500" height="50">
                             <input type="email" name="email" id="email" placeholder="Enter Your Email id">
                                     </td>
                                 </tr>
                             </table>
                    </td>
                </tr>
<!--                2nd-->

              <tr>
                    <td width="800" height="50">
                    <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Mobile :</b></td>
                                     <td width="500" height="50">
                              <input type="number" name="number" id="number" placeholder="Enter Your mobile number">
                                     </td>
                                 </tr>
                             </table>
                    </td>
                </tr>

<!--                3rd-->



              <tr>
                    <td width="800" height="50">
                         <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Additional Mobile :</b></td>
                                     <td width="500" height="50">
                              <input type="number" name="additional_number" id="number" placeholder="Additional mobile number">
                                     </td>
                                 </tr>
                             </table>
                    </td>
                </tr>
<!--                4th-->

              <tr>
                    <td width="800" height="50">
                             <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Event type :</b></td>
                                     <td width="500" height="50">
                                           <select class="form-control" name="category_id" id="events">
                                             <option value=""> Select One </option>
                                             @foreach ($categoreis as $category)
                                               <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                             @endforeach
                                           </select>
                                     </td>
                                 </tr>
                             </table>
                    </td>
                </tr>

<!--                5th-->


              <tr>
                    <td width="800" height="50">
                               <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Packages :</b></td>
                                     <td width="500" height="50">
                                             <select class="form-control" name="package_id" id="packages">
                                               <option value=""> Select One </option>
                                               @foreach ($packageing as $packas)
                                                 <option value="{{ $packas->id }}"> {{ $packas->package_title }} </option>
                                               @endforeach
                                             </select>
                                     </td>
                                 </tr>
                             </table>
                    </td>
                </tr>

<!--              6th-->

              <tr>
                    <td width="800" height="50">
                     <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Number of Guest :</b></td>
                                     <td width="500" height="50">
                              <input type="number" name="guest_number" id="number" placeholder="Number of Guest">
                                     </td>
                                 </tr>
                             </table>
                    </td>

                </tr>

<!--                 7th   -->
             <tr>
                    <td width="800" height="50">
                        <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Select Event Time :</b></td>
                                     <td width="500" height="50">
                                             <select class="form-control" name="times_id" id="time">
                                               <option value=""> Select One </option>
                                               @foreach ($timeing as $times)
                                                 <option value="{{ $times->id }}"> {{ $times->event_shift_time }} </option>
                                               @endforeach
                                             </select>
                                     </td>
                                 </tr>
                             </table>
                    </td>
                </tr>
<!--                8th-->

             <tr>
                    <td width="800" height="50">
                           <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                     <td width="300" height="50"><b>Select date</b></td>
                                     <td width="500" height="50">
                                       <input type="date" name="date" id="date">
                                     </td>
                                 </tr>
                             </table>
                    </td>
                </tr>

<!--                9th-->


             <tr>
                    <td width="800" height="50">
                    <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td width="200" height="50"></td>
                            <td width="400" height="50" >
                                <label><button type="submit" value="submit" >

                                <strong>Booking Now</strong>

                                </button></label>
                            </td>
                            <td width="200" height="50"></td>
                        </tr>
                    </table>
                    </td>
                </tr>
<!--              11th-->


                <tr>
                    <td width="800" height="50">
                        <table width="800" height="50" cellpadding="0" cellspacing="0" border="0">
                            <td width="300" height="50"></td>
                            <td width="500" height="50"> <a href="https://www.facebook.com/log-in" target="_blank"> <i class="fa fa-facebook" style="background: #3257d0; padding-left: 8px; color: #fff;"></i></a>

                                    <a href="https://www.twitter.com/log-in" target="_blank"> <i class="fa fa-twitter" style="background: #18c7e6; padding-left: 5px; color: #fff;"></i></a>

                                    <a href="https://www.instagram.com/log-in" target="_blank"> <i class="fa fa-instagram" style="background: #e36618; padding-left: 5px; color: #fff;"></i></a>

                                  <a href="https://www.google.com/" target="_blank"> <i class="fa fa-google-plus" style="background: #e31818; width: 30px; padding-left: 5px; color: #fff;"></i></a></td>
                        </table>
                    </td>
                </tr>




                </table>
            </td>
        </tr>
    </table>
</form>


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
