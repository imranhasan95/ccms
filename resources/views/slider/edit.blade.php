@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-5 m-auto">
              <div class="card">
                  <div class="card-header text-center ">Edit Slider</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      <form  action="{{  route('slider.update', [$slider_info->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName">Slider</label>
                          <input type="hidden" class="form-control" name="id" value="{{ $slider_info->id }}">
                          <input type="hidden" name="_method" value="PUT">
                          <input type="text" class="form-control" placeholder="Enter Slider Title" value="{{ $slider_info->slider_title }}" name="slider_title">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Slider</label>
                          <input type="text" class="form-control" placeholder="Enter Slider Title" value="{{ $slider_info->slider_shot }}" name="slider_shot">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Slider</label>
                          <input type="text" class="form-control" placeholder="Enter Slider Title" value="{{ $slider_info->slider_long }}" name="slider_long">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label >Current  Imeges</label>
                            <img src="{{ asset('uploads/slider_imegrs') }}/{{ $slider_info->slider_imegrs }}" alt="" width="150" height="150">
                        </div>
                          <div class="form-group">
                            <label >New Photo</label>
                            <input type="file" name="new_photo" class="form-control" onchange="readURL(this);">
                            <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" />
                            <script>
                             function readURL(input) {
                               if (input.files && input.files[0]) {
                                 var reader = new FileReader();
                                 reader.onload = function (e) {
                                   $('#tenant_photo_viewer').attr('src', e.target.result).width(150).height(195);
                                 };
                                 $('#tenant_photo_viewer').removeClass('hidden');
                                 reader.readAsDataURL(input.files[0]);
                               }
                             }
                             </script>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
