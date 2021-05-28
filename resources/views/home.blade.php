@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 max-w-305">
            <div class="card mb-3">
                <!-- <div class="card-header">{{ __('Welcome ')  }} <strong>{{ $user->name }}</strong></div> -->
                <div class="card-body">
                    <div class="text-center">
                        <img class="cover_img" src="{{ url('/').'/img/pngtree-colorful.jpg'}}">
						<img class="profile_img" src="{{ url('/').'/img/author_default.png'}}">
						<a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
					</div>
                </div>
            </div>

            <div class="card">
                <!-- <div class="card-header">{{ __('Welcome ')  }} <strong>{{ $user->name }}</strong></div> -->
                <div class="card-body">
                    <div>
                        <ul class="sidebar">
                            <li><a href="">Events</a> <a href="#" class="create">+</a></li>
                            <li><a href="">Groups</a> <a href="#" class="create">+</a></li>
                            <li><a href="">Pages</a> <a href="#" class="create">+</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

		<div class="col-lg-6 mt-lg-0 mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="create_post d-flex align-items-center">
                        <div class="user_img"><img src="{{ url('/').'/img/author_default.png'}}"></div>
                        <div class="full-width"><a href="{{ route('post.create')}}" class="btn btn-primary">Create Post</a></div>
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <!-- <div class="card-header">{{ __('Latest Posts ')  }}</div> -->
                <div class="card-body">
                    <div class="post_feed">
                        <div class="user_info">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited</span>
                                <span class="time">1d <i class="fa fa-circle" aria-hidden="true"></i> <i class="fa fa-globe" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="post_feed_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of <strong> type and scrambled it to make</strong> a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body">
                    <div class="post_feed">
                        <div class="user_info">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited</span>
                                <span class="time">2d <i class="fa fa-circle" aria-hidden="true"></i> <i class="fa fa-globe" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="post_feed_content">
                            <p>Please Rate My Work</p>
                            <img src="https://d1zdxptf8tk3f9.cloudfront.net/ckeditor_assets/pictures/1733/content_aziz-acharki-290990.jpg">
                        </div>
                    </div>
                </div>
            </div>

        </div>

		<div class="col-lg-3 min-w-300 mt-lg-0 mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="add_your_feed">
                        <h3>Add to your feed</h3>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Brainstorming, Wireframing, Prototyping, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn"><span>+</span> Follow</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn"><span>+</span> Follow</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, UX Research, Sketch, Invision.</span>
                                <a href="#" class="btn"><span>+</span> Follow</a>
                            </div>
                        </div>
                        <div class="user_info align-items-start">
                            <div class="user_img">
                                <img src="{{ url('/').'/img/author_default.png'}}">
                            </div>
                            <div class="user_detail">
                                <a class="user_name" href="{{ route('user.profile') }}" class="btn btn-primary">{{ $user->name }}</a>
                                <span class="disignatio">UI/Ux Designer at The Wipro Limited, Prototyping, Figma, Adobe XD, Sketch, Invision.</span>
                                <a href="#" class="btn"><span>+</span> Follow</a>
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
    .max-w-305{
        max-width: 305px !important;
    }
}
</style>