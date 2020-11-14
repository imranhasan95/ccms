@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header text-center">Package List</div>
                  <div class="card-body table-responsive">
                      @if (session('edit_status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('edit_status') }}
                          </div>
                      @endif
                        <table class="table table-bordered text-center " id="example">
                          <thead class="text-center">
                            <tr>
                              <th>SL NO</th>
                              <th>Category Name</th>
                              <th>Package Title</th>
                              <th>Package Description</th>
                              <th>Package Price</th>
                              <th>Package Photo</th>
                              <th>Created At</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                                @foreach ($packageing as $packagei)
                                  <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $packagei->relationcategorytable->category_name }}</td>
                                    <td>{{ $packagei->package_title }}</td>
                                    <td>{{ $packagei->pack_description }}</td>
                                    <td>{{ $packagei->pack_price }}</td>
                                    <td> <img src="{{ asset('uploads\Package_imegrs') }}/{{ $packagei->pack_imegrs }}" alt="Not Found" width="100" height="80"> </td>
                                    <td>{{ $packagei->created_at }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a type="button" class="btn btn-warning text-center"  href="{{ route('package.edit', [$packagei->id]) }}">Edit</a>
                                          <a type="button" class="btn btn-danger text-center deleted_btn" href="{{ route('package.destroy', [$packagei->id]) }}">Delete</a>
                                        </div>
                                    </td>
                                  </tr>
                                @endforeach
                          </tbody>
                        </table>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header text-center ">Add Package</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      <form method="post" action="{{  route('package.store') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="form-control" name="category_id">
                                  <option value=""> Select One </option>
                                  @foreach ($categoreis as $category)
                                    <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                  @endforeach
                                </select>
                            </div>
                          <div class="form-group">
                            <label for="exampleInputName">Package Title</label>
                            <input type="text" class="form-control" placeholder="Enter Package Title" name="package_title">
                            {{-- @error ('alert_uantity')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName">Package Description</label>
                            <input type="text" class="form-control" placeholder="Enter Slider Description" name="pack_description">
                            {{-- @error ('alert_uantity')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName">Package Price</label>
                            <input type="text" class="form-control" placeholder="Enter Slider Title" name="pack_price">
                            {{-- @error ('alert_uantity')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                          </div>
                          <div class="form-group">
                            <label >Package Imeges</label>
                            <input type="file" name="pack_imegrs">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('footer_script')
  <script type="text/javascript">
        $(document).ready(function (){
           $('#example').DataTable();
           $('.deleted_btn').click (function(){
             var link_to_go = $(this).val();

             Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.value) {
                    window.loction.href = link_to_go;
                    }
                  })
           });
      });
  </script>
@endsection
