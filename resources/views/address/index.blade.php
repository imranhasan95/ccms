@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Address List') }}</div>
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
                            <th>Address Title</th>
                            <th>Address Description</th>
                            <th>Address Email</th>
                            <th>Address Websiteaddress</th>
                            <th>Address Number</th>
                            <th>Address Photo</th>
                            <th>Created At</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                              @foreach ($addressing as $addressi)
                                <tr>
                                  <td>{{ $loop->index + 1 }}</td>
                                  <td>{{ $addressi->address_title }}</td>
                                  <td>{{ $addressi->address_description }}</td>
                                  <td>{{ $addressi->address_email }}</td>
                                  <td>{{ $addressi->address_website }}</td>
                                  <td>{{ $addressi->address_number }}</td>
                                  <td> <img src="{{ asset('uploads\address_imegrs') }}/{{ $addressi->address_imegrs }}" alt="Not Found" width="100" height="80"> </td>
                                  <td>{{ $addressi->created_at }}</td>
                                  <td>
                                      <div class="btn-group" role="group" aria-label="Basic example">
                                        <a type="button" class="btn btn-warning text-center"  href="{{ route('address.edit', [$addressi->id]) }}">Edit</a>
                                        <a type="button" class="btn btn-danger text-center deleted_btn" href="{{ route('address.destroy', [$addressi->id]) }}">Delete</a>
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
                <div class="card-header text-center ">Add Address</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{  route('address.store') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group">
                          <label for="exampleInputName">Address Title</label>
                          <input type="text" class="form-control" placeholder="Enter Address Title" name="address_title">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Address Description</label>
                          <input type="text" class="form-control" placeholder="Enter Address Description" name="address_description">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Address Email</label>
                          <input type="email" class="form-control" placeholder="Enter Address Email" name="address_email">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Address Website</label>
                          <input type="website" class="form-control" placeholder="Enter Address Website" name="address_website">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName">Number</label>
                          <input type="number" class="form-control" placeholder="Enter Address Website" name="address_number">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                        <div class="form-group">
                          <label >Address Imeges</label>
                          <input type="file" name="address_imegrs">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
