@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header text-center"> <h2>User Dashboard</h2> </div>
              <div class="card-body table-responsive">
                 <table class="table table-bordered text-center" id="product_list_table">
                  <thead>
                    <tr>
                      <th>SL-NO</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Additional Number</th>
                      <th>Guest Number</th>
                      <th>Date</th>
                      <th>Purchased At</th>
                      {{-- <th>Download PDF</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($bookings as $bookin)
                    <tr>

                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $bookin->name }}</td>
                        <td>{{ $bookin->email }}</td>
                        <td>{{ $bookin->number }}</td>
                        <td>{{ $bookin->additional_number }}</td>
                        <td>{{ $bookin->guest_number }}</td>
                        <td>{{ $bookin->date }}</td>
                        <td>{{ $bookin->created_at->diffForhumans() }}</td>

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
      $('#product_list_table').DataTable();
      $('.delete_btn').click(function(){
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
          window.location.href = link_to_go;
        }
      })

      });
    });
  </script>
@endsection
