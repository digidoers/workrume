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
                    <div class="d-lg-flex justify-content-between">
						<div class="personal_info">
							<h3 class="profile_name">{{ $user->name }}</h3>
							<h5>Frontend Developer at Wipro Limited</h5>
							<h6>Address, State, Country</h6>
						</div>
						<div class="company_school_info">
                            <ul>
                                <li><a href="#"><i class="fa fa-building-o" aria-hidden="true"></i>Wipro Limited</li>
                                <li><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Harvard University</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card overflow-hidden rounded-lg mt-4">
                <div class="card-body profile_info about">
                    <h3 class="card_heading">About</h3>
                    <a href="#" class="edit_pen"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
            </div>

            <div class="card overflow-hidden rounded-lg mt-4">
                <div class="card-body profile_info activity pb-0">
                    <h3 class="card_heading">Activities</h3>
                    <a class="followers" href="#">380 followers</a>
                    <ul class="activities">
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ url('/').'/img/author_default.png'}}">	
                                </div>
                                <div class="user_activity">
                                    <strong>Happy work-iversary!</strong>
                                    Andrew Tie commented
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ url('/').'/img/author_default.png'}}">	
                                </div>
                                <div class="user_activity">
                                    <strong>Happy work-iversary!</strong>
                                    Andrew Tie commented
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ url('/').'/img/author_default.png'}}">	
                                </div>
                                <div class="user_activity">
                                    <strong>Happy work-iversary!</strong>
                                    Andrew Tie commented
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ url('/').'/img/author_default.png'}}">	
                                </div>
                                <div class="user_activity">
                                    <strong>Happy work-iversary!</strong>
                                    Andrew Tie commented
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="see_all">See all activity</a>
                </div>
            </div>

            <div class="card overflow-hidden rounded-lg mt-4">
                <div class="card-body profile_info experience">
                    <div class="head_part">
                        <h3 class="card_heading">Experience</h3>
                        <a href="{{ route('experience.index')}}" class="edit_pen">
                            <img src="{{ url('/').'/img/add-icon.svg'}}">
                        </a>
                    </div>
                    <div class="all_experience">
                        <div class="exp_list">
                            <div class="logo_img">
                                <a href="#">
                                    <img src="{{ url('/').'/img/wipro-logo.png'}}">	
                                </a>
                            </div>
                            <div class="exp_info">
                                <a href="#">
                                    <div class="comp_name">Wipro Limited</div>
                                    <div class="position">Frontend Developer</div>
                                    <div class="duration">Jan 2013 - Present <i class="fa fa-circle" aria-hidden="true"></i> 8 yrs 4 mos</div>
                                    <div class="comp_add">London, United Kingdom</div>
                                </a>
                            </div>
                            <a href="#" class="edit_pen"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </div>
                        <div class="exp_list">
                            <div class="logo_img">
                                <a href="#">
                                    <img src="{{ url('/').'/img/wipro-logo.png'}}">	
                                </a>
                            </div>
                            <div class="exp_info">
                                <a href="#">
                                    <div class="comp_name">Wipro Limited</div>
                                    <div class="position">Frontend Developer</div>
                                    <div class="duration">Jan 2013 - Present <i class="fa fa-circle" aria-hidden="true"></i> 8 yrs 4 mos</div>
                                    <div class="comp_add">London, United Kingdom</div>
                                </a>
                            </div>
                            <a href="#" class="edit_pen"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="education">
                        <div class="head_part">
                            <h3 class="card_heading">Education</h3>
                            <a href="#" class="edit_pen">
                                <img src="{{ url('/').'/img/add-icon.svg'}}">
                            </a>
                        </div>
                        <div class="all_education_list">
                            <div class="exp_list">
                                <div class="logo_img">
                                    <a href="#">
                                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/29/Harvard_shield_wreath.svg/1200px-Harvard_shield_wreath.svg.png">	
                                    </a>
                                </div>
                                <div class="exp_info">
                                    <a href="#">
                                        <div class="comp_name">Harvard University</div>
                                        <div class="position">Bachelor of Computer Application</div>
                                        <div class="duration">2011 - 2013</div>
                                        <div class="comp_add">Cambridge, MA, United States</div>
                                    </a>
                                </div>
                                <a href="#" class="edit_pen"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <div class="exp_list">
                                <div class="logo_img">
                                    <a href="#">
                                        <img src="{{ url('/').'/img/school.png'}}">	
                                    </a>
                                </div>
                                <div class="exp_info">
                                    <a href="#">
                                        <div class="comp_name">Kingsworth International School</div>
                                        <div class="position">Frontend Developer</div>
                                        <div class="duration">1996 - 2011</div>
                                        <div class="comp_add">56 Rue de Passy, 75016 Paris, FRANCE</div>
                                    </a>
                                </div>
                                <a href="#" class="edit_pen"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card overflow-hidden rounded-lg mt-4">
                <div class="card-body profile_info interests pb-0">
                    <div class="head_part">
                        <h3 class="card_heading">Interests</h3>
                        <a href="{{ route('experience.index')}}" class="edit_pen">
                            <img src="{{ url('/').'/img/add-icon.svg'}}">
                        </a>
                    </div>
                    <ul class="activities interests_list">
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="https://www.infosys.com/content/dam/infosys-web/en/global-resource/media-resources/infosys-nyn-tagline-png.png">	
                                </div>
                                <div class="user_activity">
                                    <strong>Infosys</strong>
                                    4,057,849 followers
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="https://www.infosys.com/content/dam/infosys-web/en/global-resource/media-resources/infosys-nyn-tagline-png.png">	
                                </div>
                                <div class="user_activity">
                                    <strong>Infosys</strong>
                                    4,057,849 followers
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="https://www.infosys.com/content/dam/infosys-web/en/global-resource/media-resources/infosys-nyn-tagline-png.png">	
                                </div>
                                <div class="user_activity">
                                    <strong>Infosys</strong>
                                    4,057,849 followers
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="https://www.infosys.com/content/dam/infosys-web/en/global-resource/media-resources/infosys-nyn-tagline-png.png">	
                                </div>
                                <div class="user_activity">
                                    <strong>Infosys</strong>
                                    4,057,849 followers
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="see_all">See all</a>
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