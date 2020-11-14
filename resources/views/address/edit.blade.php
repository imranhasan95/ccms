@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-5 m-auto">
              <div class="card">
                  <div class="card-header text-center ">Edit Address</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      <form  action="{{  route('address.update', [$package_info->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName">Address Title</label>
                          <input type="hidden" class="form-control" name="id" value="{{ $package_info->id }}">
                          <input type="hidden" name="_method" value="PUT">
                          <input type="text" class="form-control" placeholder="Enter Address Title" value="{{ $package_info->address_title }}" name="address_title">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Description</label>
                          <input type="text" class="form-control" placeholder="Enter Description" value="{{ $package_info->address_description }}" name="address_description">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Email</label>
                          <input type="text" class="form-control" placeholder="Enter Email" value="{{ $package_info->address_email }}" name="address_email">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Website</label>
                          <input type="text" class="form-control" placeholder="Enter Website" value="{{ $package_info->address_website }}" name="address_website">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Number</label>
                          <input type="text" class="form-control" placeholder="Enter Number" value="{{ $package_info->address_number }}" name="address_number">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label >Current  Imeges</label>
                            <img src="{{ asset('uploads/address_imegrs') }}/{{ $package_info->address_imegrs }}" alt="" width="150" height="150">
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
