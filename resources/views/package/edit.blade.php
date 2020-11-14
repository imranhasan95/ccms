@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-5 m-auto">
              <div class="card">
                  <div class="card-header text-center ">Edit Package</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      <form  action="{{  route('package.update', [$package_info->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <select class="form-control" name="category_id">
                              <option value=""> Select One </option>
                              @foreach ($categoreis as $category)
                                <option value="{{ $category->id }}" {{ ($package_info->category_id == $category->id ) ? "selected":"" }}> {{ $category->category_name }} </option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Slider</label>
                          <input type="hidden" class="form-control" name="id" value="{{ $package_info->id }}">
                          <input type="hidden" name="_method" value="PUT">
                          <input type="text" class="form-control" placeholder="Enter Slider Title" value="{{ $package_info->package_title }}" name="package_title">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Slider</label>
                          <input type="text" class="form-control" placeholder="Enter Slider Title" value="{{ $package_info->pack_description }}" name="pack_description">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Slider</label>
                          <input type="text" class="form-control" placeholder="Enter Slider Title" value="{{ $package_info->pack_price }}" name="pack_price">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label >Current  Imeges</label>
                            <img src="{{ asset('uploads/Package_imegrs') }}/{{ $package_info->pack_imegrs }}" alt="" width="150" height="150">
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
