@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header"><h3>User profile.</h3></div>

                <div class="card-body">
                	<p>{{ $user->name }}</p>
                	<p>{{ $user->email }}</p>
                </div>
                <div class="card-footer">
                	User registered at: {{ date('d M, Y', strtotime($user->created_at)) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
