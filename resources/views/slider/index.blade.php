@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header text-center">Slider List</div>
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
                              <th>slider Title</th>
                              <th>slider Title</th>
                              <th>slider Title</th>
                              <th>slider Photo</th>
                              <th>Created At</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                                @foreach ($silder_pis as $silder_p)
                                  <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $silder_p->slider_title }}</td>
                                    <td>{{ $silder_p->slider_shot }}</td>
                                    <td>{{ $silder_p->slider_long }}</td>
                                    <td> <img src="{{ asset('uploads\slider_imegrs') }}/{{ $silder_p->slider_imegrs }}" alt="Not Found" width="100" height="80"> </td>
                                    <td>{{ $silder_p->created_at }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a type="button" class="btn btn-warning text-center"  href="{{ route('slider.edit', [$silder_p->id]) }}">Edit</a>
                                          <a type="button" class="btn btn-danger text-center deleted_btn" href="{{ route('slider.destroy', [$silder_p->id]) }}">Delete</a>
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
                  <div class="card-header text-center ">Add Slider</div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      <form method="post" action="{{  route('slider.store') }}" enctype="multipart/form-data">
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputName">Slider</label>
                            <input type="text" class="form-control" placeholder="Enter Slider Title" name="slider_title">
                            {{-- @error ('alert_uantity')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName">Slider</label>
                            <input type="text" class="form-control" placeholder="Enter Slider Title" name="slider_shot">
                            {{-- @error ('alert_uantity')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName">Slider</label>
                            <input type="text" class="form-control" placeholder="Enter Slider Title" name="slider_long">
                            {{-- @error ('alert_uantity')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                          </div>
                          <div class="form-group">
                            <label >Slider Imeges</label>
                            <input type="file" name="slider_imegrs">
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
