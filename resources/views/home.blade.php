@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Admin Homepage') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered text-center " id="example">
                        <thead class="text-center">
                          <tr>
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Additional Number</th>
                            <th>Guest Number</th>
                            <th>Event Category</th>
                            <th>Event Packages</th>
                            <th>Event Time</th>
                            <th>Event Date</th>
                            <th>Time At</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($bookings as $bookns)
                                <tr>
                                  <td>{{ $loop->index + 1 }}</td>
                                  <td>{{ $bookns->name }}</td>
                                  <td>{{ $bookns->email }}</td>
                                  <td>{{ $bookns->number }}</td>
                                  <td>{{ $bookns->additional_number }}</td>
                                  <td>{{ $bookns->guest_number }}</td>
                                  <td>{{ $bookns->relationpackagecategorytable->category_name }}</td>
                                  <td>{{ $bookns->relationpackagetable->package_title }}</td>
                                  <td>{{ $bookns->relationtimestable->event_shift_time }}</td>
                                  <td>{{ $bookns->date }}</td>
                                  <td>{{ $bookns->created_at->diffForhumans() }}</td>
                                  <td>
                                      <div class="btn-group" role="group" aria-label="Basic example">
                                        {{-- <a type="button" class="btn btn-warning text-center"  href="">Edit</a> --}}
                                        <a type="button" class="btn btn-danger text-center deleted_btn" href="{{ route('booking.destroy', [$bookns->id]) }}">Delete</a>
                                      </div>
                                  </td>
                                </tr>
                              @endforeach
                        </tbody>
                      </table>
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
