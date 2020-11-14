@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-5 m-auto">
              <div class="card">
                  <div class="card-header text-center ">Edit Time </div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      <form  action="{{  route('time.update', [$times_info->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName">Event Shift Time</label>
                          <input type="hidden" name="_method" value="PUT">
                          <input type="hidden" class="form-control" name="id" value="{{ $times_info->id }}">
                          <input type="text" class="form-control" placeholder="Enter Event Shift First" value="{{ $times_info->event_shift_time }}" name="event_shift_time">
                          {{-- @error ('alert_uantity')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror --}}
                        </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
