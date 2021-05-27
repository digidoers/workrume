@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Welcome ')  }} <strong>{{ $user->name }}</strong></div>

                <div class="card-body">
                    <div>
						<img src="{{ url('/').'/img/author_default.png'}}">
						<a href="{{ route('user.profile') }}" class="btn btn-primary">View Profile</a>
					</div>
					
					<div class="m-3">
						<a href="{{ route('post.create')}}" class="btn btn-primary">Create Post</a>
					</div>
					<div class="m-3">
						<div class="alert alert-warning">Pages</div>
						<a href="#" class="btn btn-primary">Create Page</a>
					</div>
                </div>
            </div>
        </div>
		<div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Latest Posts ')  }}</div>

                <div class="card-body">
                    <div >No Post Found.</div>
                </div>
            </div>
        </div>
		<div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Ads ')  }}</div>

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
