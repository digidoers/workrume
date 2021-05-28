@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 max-w-75">
            <div class="card overflow-hidden rounded-lg">
                <!-- <div class="card-header">Profile Data</div> -->
                <div class="card-body">
                    <div class="my_profile">
						<div class="update_cover">
							<a href="#"><i class="fa fa-camera" aria-hidden="true"></i></a>
							<img class="cover_img" src="{{ url('/').'/img/pngtree-colorful.jpg'}}">
						</div>
						<img class="profile_img" src="{{ url('/').'/img/author_default.png'}}">						 
						<a href="{{ route('update-profile.edit')}}" class="update_profile"><i class="fa fa-pencil" aria-hidden="true"></i></a>
					</div>
					
					<div class="m-3">
						<div class="profile_name">{{ $user->name }}</div>
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
						<div class="alert alert-warning">Achievements <div class="text-right"><a href="{{route('achievements.index')}}" class="btn btn-primary">Edit</a></div></div>
					</div>
					<div class="m-3">
						<div class="alert alert-warning">Education <div class="text-right"><a href="{{route('education.index')}}"class="btn btn-primary">Edit</a></div></div>
					</div>
					
					<div class="m-3">
						<div class="alert alert-warning">Interest <div class="text-right"><a class="btn btn-primary">Edit</a></div></div>
					</div>
					
                </div>
            </div>
        </div>
		<div class="col-md-3 min-w-300">
            <div class="card mb-3">
                <!-- <div class="card-header">{{ __('People you may know ')  }}</div> -->
				<div class="card-body">
                    <div class="add_your_feed viewed">
                        <h3>People also viewed</h3>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Brainstorming, Wireframing, Prototyping, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn">Connect</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn">Message</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Sketch, Invision.</span>
                                <a href="#" class="btn">Connect</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, Prototyping, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn">Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="card mb-3">
                <!-- <div class="card-header">{{ __('People you may know ')  }}</div> -->
				<div class="card-body">
                    <div class="add_your_feed know">
                        <h3>People you may know</h3>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Brainstorming, Wireframing, Prototyping, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn">Connect</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn">Connect</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Sketch, Invision.</span>
                                <a href="#" class="btn">Connect</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, Prototyping, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn">Connect</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="ads_img">
                <img src="https://i.pinimg.com/474x/5f/64/7b/5f647be5aa6f6d54448dbd33410a729d.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
<style>
@media (min-width: 1350px){
    .min-w-300 {
        min-width: 330px;
    }
    .max-w-75{
        max-width: calc(100% - 330px) !important;
    }
}
</style>