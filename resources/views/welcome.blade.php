@extends('layouts.fontend_master')

@section('contents')

  <!-=========== Banner Part Start =========-->
  @foreach ($silder_pis as $silder_p)
  <section  id="banner" class="banner_part" class="carousel">

      <div class="container">
          <div class="row ">

              <div class="col-lg-7 m-auto" >
                  <div class="banner-slider">

                      <div class="banner-item text-center" >
                          <h3>{{ $silder_p->slider_title }}</h3>
                          <h1>{{ $silder_p->slider_shot }}</h1>
                          <p>{{ $silder_p->slider_long }}</p>
                          <a href="#" target="_blank">Booking Information</a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </section>
  @endforeach
  <!-=========== Banner Part End =========-->


  <!-=========== Service Part Start =========-->
  <section id="package">
      <div class="container">
          <div class="row package-slider">
              @foreach ($packageing as $packag)
              <div class="col-lg-3">
                  <div class="package-item text-center">
                      <a href="{{ route('package.show', [$packag->id]) }}" target="_blank"><i class="fa fa-pencil"></i>
                      <h3>{{ $packag->package_title }}</h3></a>
                      <p>{{ $packag->pack_description }}</p>
                  </div>
              </div>
                @endforeach
              </div>
          </div>
      </div>
  </section>
  <!-=========== Service Part End =========-->


  <!-=========== Idea Part Start =========-->
  <section id="idea">
      <div class="container">
          <div class="row">
              @foreach ($ideaing as $ideai)
              <div class="col-lg-8 m-auto">
                  <div class="idea-head text-center">
                      <h2>{{ $ideai->idea_title }}</h2>

                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="idea-img">
                      <img src="{{ asset('uploads\ideaslider_imegrs') }}/{{ $ideai->idea_imegrs }}" alt="idea" class="img-fluid" background-position="center">
                  </div>
              </div>
            @endforeach
          </div>
      </div>
  </section>
  <!-=========== Idea Part End =========-->

  <!-=========== purchase Part Start =========-->
  <section id="booking_package">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-8">
                  <div class="booking_package-left">
                      <h3><span>CCMS</span></h3>
                      <p>Don't Forget to Rate the Template. Thanks so much!</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4  ml-auto text-right">
                  <div class="booking_package-right">
                      <a href="{{ route('booking.index') }}" target="_blank">Booking Now</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-=========== purchase Part End =========-->

  <!-=========== Gallery Part Start =========-->
  <section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="idea-head text-center">
                    <h2>Our Latest Service.</h2>
                    <p>Our Latest Services. Select your program &amp; give us opportunity for provide you a quality full best services. <i class="fa fa-smile"></i></p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="buttons text-center">
                    <a class="nav-item nav-link active" data-filter="all" href="#nav-all">ALL</a>
                      @foreach ($categoreis as $category)
                        <a class=""  href="#nav-{{ $category->id }}" >{{ $category->category_name  }}</a>
                      @endforeach
                  </div>
              </div>            
        </div>
        <div class="row gal-main">  
            @foreach ($packageing as $packag)            
            <div class="col-lg-4 col-sm-6 mix Birthday">
            
                <div class="service-item">
                
                    <div class="gal-img">
                        <img src="{{ asset('uploads\Package_imegrs') }}/{{ $packag->pack_imegrs }}" alt="Package image"  class="img-fluid w-100">
                        <div class="overlay text-center">
                            <i class="fa fa-link"></i>
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <div class="gal-text">
                       <a href="{{ route('package.show', [$packag->id]) }}"><h3>{{ $packag->package_title }}</h3>  </a>
                            <!-- <p>{{ $packag->pack_description }}</p> -->
                    </div>
                </div>
               
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="load-btn text-center">
                    <a href="#">View more</a>
                </div>
            </div>
        </div>
    </div>
</section>  
  <!-=========== Gallery Part End =========-->


  <!-=========== Video Part Start =========-->
  <section id="video">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto">
                  <div class="idea-head video-head text-center">
                     <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/9No-FiEInLA">
                         <i class="fa fa-play-circle-o"></i>
                     </a>
                      <h2>Full Video Presentation</h2>
                      <p>A full vedio presentation of our community center. You can see our front view, office room, hall room, kitchen room &amp; others facilities.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-=========== Video Part End =========-->


  <!-=========== mobile Part Start =========-->
  <section id="mobile">
      <div class="container">
          <div class="row">
              <div class="col-lg-5 col-md-5">
                  <div class="mobile-img">
                      <img src="{{ asset('font_end/images/mobile3.PNG') }}" alt="mobile" class="img-fluid">
                  </div>
              </div>
              <div class="col-lg-7 col-md-7">
                  <div class="mobile-text">
                      <h3>Apps for Mobile Devices.</h3>
                      <p>For easy booking please install our mobile apps. You can booking, visit, collect information through this mobile apps. This is an user friendly Application.</p>
                      <div class="features">
                          <p><i class="fa fa-chevron-right"></i>For Booking install apps</p>
                          <p><i class="fa fa-chevron-right"></i>For cheacking Package install apps</p>
                          <p><i class="fa fa-chevron-right"></i>For cheaking vacancy on spaecific date.</p>
                          <p><i class="fa fa-chevron-right"></i>For seaving time &amp; money install our apps</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-=========== mobile Part End =========-->


  <!-=========== counter Part Start =========-->
  <section id="counter">
      <div class="container">
          <div class="row">
              <div class="col col-sm-4">
                  <div class="count-item text-center">
                      <img src="{{ asset('font_end/images/count1.png') }}" alt="count1" class="img-fluid">
                      <h3 class="counter">35877</h3>
                      <p>Total Satisfied Clients</p>
                  </div>
              </div>
              <div class="col col-sm-4">
                  <div class="count-item text-center">
                      <img src="{{ asset('font_end/images/count1.png') }}" alt="count1" class="img-fluid">
                      <h3 class="counter">3587</h3>
                      <p>Wedding Party Satisfied Clients</p>
                  </div>
              </div>
              <div class="col col-sm-4">
                  <div class="count-item text-center">
                      <img src="{{ asset('font_end/images/count1.png') }}" alt="count1" class="img-fluid">
                      <h3 class="counter">3587</h3>
                      <p> Birthday Satisfied Clients</p>
                  </div>
              </div>
              <div class="col col-sm-4 offset-sm-2">
                  <div class="count-item text-center">
                      <img src="{{ asset('font_end/images/count1.png') }}" alt="count1" class="img-fluid">
                      <h3 class="counter">3587</h3>
                      <p>Seminar Satisfied Clients</p>
                  </div>
              </div>
              <div class="col col-sm-4">
                  <div class="count-item text-center">
                      <img src="{{ asset('font_end/images/count1.png') }}" alt="count1" class="img-fluid">
                      <h3 class="counter">3587</h3>
                      <p>Corporate Satisfied Clients</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-=========== counter Part End =========-->

  <!-=========== Blog Part Start =========-->
  <section id="blog">
     <i class="fa fa-chevron-left left"></i>
     <i class="fa fa-chevron-right right"></i>
      <div class="container">
         <div class="row">
             <div class="col-lg-8 m-auto">
              <div class="idea-head text-center">
                  <h2>Recent Functions.</h2>
                  <p>A review of our recently successfull functions.</p>
              </div>
          </div>
         </div>
          <div class="row blog-slider">
            @foreach ($posts as $post)
              <div class="col-lg-4">
                  <div class="card">
                    <div class="blog-img">
                        <img src="{{ asset('uploads\post_images') }}/{{ $post->post_images }}" class="card-img-top" alt="blog" class="img-fluid">
                        <div class="over"></div>
                    </div>
                    <div class="date">
                      {{ $post->created_at->format('M-d-Y ')  }}
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">{{ $post->body }} </p>
                      <a href="#">Read More <i class="fa fa-play"></i></a>
                    </div>
                  </div>
              </div>
             @endforeach
          </div>
      </div>
  </section>
  <!-=========== Blog Part End =========-->

@endsection
@section('footer_script')
<script>
    $('.single-item-rtl').slick({
      rtl: true
    });
</script>
@endsection
