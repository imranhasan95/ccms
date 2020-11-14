<section class="wn__bestseller__area bg--white pt--80  pb--30">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
          <div class="idea-head text-center">
              <h2>Our Latest Service.</h2>
              <p>Our Latest Services. Select your program &amp; give us opportunity for provide you a quality full best services. <i class="fa fa-smile"></i></p>
          </div>
      </div>
    </div>
    <div class="row mt--50">
      <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="product__nav nav justify-content-center" role="tablist">
          <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
            @foreach ($categoreis as $category)
              <a class="nav-item nav-link" data-toggle="tab" href="#nav-{{ $category->id }}" role="tab">{{ $category->category_name  }}</a>
            @endforeach
        </div>
      </div>
    </div>
    <div class="tab__container mt--60">
      <!-- Start Single Tab Content -->
      <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
           @foreach ($packageing as $packag)
            <div class="single__product">
              <!-- Start Single Product -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product product__style--3">
                  <div class="product__thumb">
                    <a class="first__img" href=""><img src="{{ asset('uploads\Package_imegrs') }}/{{ $packag->pack_imegrs }}" alt="product image"></a>
                  </div>
                  <div class="product__content content--center content--center">
                    <h4>  <a href="{{ route('package.show', [$packag->id]) }}"><h3>{{ $packag->package_title }}</h3>  </a></h4>
                    <ul class="prize d-flex">
                        <p>{{ $packag->pack_description }}</p>
                    </ul>
                    <div class="action">
                      <div class="actions_inner">
                        <ul class="add_to_links">
                          <i class="fa fa-link"></i>
                          <i class="fa fa-search"></i>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Start Single Product -->
            </div>
            @endforeach
        </div>
      </div>
      <!-- End Single Tab Content -->
      @foreach ($categoreis as $category)
      <!-- Start Single Tab Content -->
      <div class="row single__tab tab-pane fade" id="nav-{{ $category->id }}" role="tabpanel">
        @php
        $categor_packages = App\Package::where('category_id',$category->id)->get();
        @endphp
        <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
             @foreach ($categor_packages as $categor_packa)
           <div class="single__product">
             <!-- Start Single Product -->
             <div class="col-lg-3 col-md-4 col-sm-6 col-12">
               <div class="product product__style--3">
                 <div class="product__thumb">
                   <a class="first__img" href=""><img src="{{ asset('uploads\Package_imegrs') }}/{{ $categor_packa->pack_imegrs }}" alt="product image"></a>
                 </div>
                 <div class="product__content content--center content--center">
                   <h4>  <a href="{{ route('package.show', [$categor_packa->id]) }}"><h3>{{ $categor_packa->package_title }}</h3>  </a></h4>
                   <ul class="prize d-flex">
                       <p>{{ $categor_packa->pack_description }}</p>
                   </ul>
                   <div class="action">
                     <div class="actions_inner">
                       <ul class="add_to_links">
                         <i class="fa fa-link"></i>
                         <i class="fa fa-search"></i>
                       </ul>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <!-- Start Single Product -->
           </div>
           @endforeach
          </div>
        </div>
          @endforeach
      <!-- End Single Tab Content -->
    </div>
  </div>
</section>

<section id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="idea-head text-center">
                    <h2>Our Latest Projects.</h2>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                </div>
            </div>
            <div class="col-lg-12">
              <div class="product__nav nav justify-content-center" role="tablist">
                <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                  @foreach ($categoreis as $category)
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-{{ $category->id }}" role="tab">{{ $category->category_name  }}</a>
                  @endforeach
              </div>
                <div class="buttons text-center" role="tablist">
                  <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                    @foreach ($categoreis as $category)
                      <a class="" data-toggle="tab" href="#nav-{{ $category->id }}" role="tab">{{ $category->category_name  }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row gal-main">
            <div class="col-lg-4 mix illus mobile">
              @foreach ($packageing as $packag)
                <div class="gallery-item">
                    <div class="gal-img">
                        <img src="{{ asset('uploads\Package_imegrs') }}/{{ $categor_packa->pack_imegrs }}" alt="Package image">
                        <div class="overlay text-center">
                            <i class="fa fa-link"></i>
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <div class="gal-text">
                        <a href="{{ route('package.show', [$packag->id]) }}"><h3>{{ $packag->package_title }}</h3>  </a>
                        <p>{{ $packag->pack_description }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            @foreach ($categoreis as $category)
              
            <div class="col-lg-4 mix photo" id="nav-{{ $category->id }}" role="tabpanel">
              @php
              $categor_packages = App\Package::where('category_id',$category->id)->get();
              @endphp
               @foreach ($categor_packages as $categor_packa)
                <div class="gallery-item">
                    <div class="gal-img">
                        <img src="{{ asset('uploads\Package_imegrs') }}/{{ $categor_packa->pack_imegrs }}" alt="Package image">
                        <div class="overlay text-center">
                            <i class="fa fa-link"></i>
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <div class="gal-text">
                          <a href="{{ route('package.show', [$categor_packa->id]) }}"><h3>{{ $categor_packa->package_title }}</h3>  </a>
                      <p>{{ $categor_packa->pack_description }}</p>
                    </div>
                </div>
              @endforeach
            </div>

              @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="load-btn text-center">
                    <a href="#">load more</a>
                </div>
            </div>
        </div>
    </div>
</section>
