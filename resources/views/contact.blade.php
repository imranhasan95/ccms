@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Email') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- {{ __('You are logged in!') }} --}}
                    <table class="table table-bordered">
                        <thead class="text-center">
                          <tr>
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Time At</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                              @foreach ($contacting as $contacti)
                                <tr>
                                  <td>{{ $loop->index + 1 }}</td>
                                  <td>{{ $contacti->name }}</td>
                                  <td>{{ $contacti->email }}</td>
                                  <td>{{ $contacti->message }}</td>
                                  <td>{{ $contacti->created_at->diffForhumans() }}</td>
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
