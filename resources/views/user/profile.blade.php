@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile Data</div>

                <div class="card-body">
                    <div>
						<img src="{{ url('/').'/img/author_default.png'}}">
						<div>{{ $user->name }}</div> <a href="{{ route('update-profile.edit')}}" class="btn btn-primary">Update Profile</a>
					</div>
					
					<div class="m-3">
						<div><strong>About - </strong> <span></span></div>
						<div><strong>School/College - </strong> <span></span></div>
						<div><strong>Working Place - </strong> <span></span></div>
						<div><strong>Contact Details - </strong> <span>{{ $user->email }}</span></div>
					</div>
					<div class="m-3">
						<div class="alert alert-warning">Activities</div>
					</div>
					<div class="m-3">
						<div class="alert alert-warning">Experience <div class="text-right"><a href="{{ route('experience.index')}}" class="btn btn-primary">Edit</a></div></div>
					</div>
					<div class="m-3">
						<div class="alert alert-warning">Achievements <div class="text-right"><a class="btn btn-primary">Edit</a></div></div>
					</div>
					<div class="m-3">
						<div class="alert alert-warning">Education <div class="text-right"><a class="btn btn-primary">Edit</a></div></div>
					</div>
					
					<div class="m-3">
						<div class="alert alert-warning">Interest <div class="text-right"><a class="btn btn-primary">Edit</a></div></div>
					</div>
					
                </div>
            </div>
        </div>
		<div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('People you may know ')  }}</div>

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
