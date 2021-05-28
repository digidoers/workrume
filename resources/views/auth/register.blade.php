@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="login_box register">
                <div class="login_header">{{ __('Register') }}</div>

                <div class="login_body">
                    <form method="POST" action="{{ route('register') }}" id="framework_form">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-12">{{ __('Name') }}</label>

                            <div class="col-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-12">{{ __('E-Mail Address') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_no"
                                class="col-12">{{ __('Phone No') }}</label>

                            <div class="col-12">
                                <input id="phone_no" type="number"
                                    class="form-control @error('phone_no') is-invalid @enderror" name="phone_no"
                                    required autocomplete="new-password">

                                @error('phone_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_role"
                                class="col-12">{{ __('User Role') }}</label>

                            <div class="col-12">

                                <?php
                                $role = role();
                                ?>


                                <select id="user_role" name="user_role" class="form-control">
                                    @foreach($role as $rl)
                                    <option value="{{$rl}}">{{ $rl }}</option>
                                    @endforeach
                                </select>

                                @error('user_role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country"
                                class="col-12">{{ __('Country') }}</label>

                            <div class="col-12">

                                <?php
                                $country = country();
                                ?>


                                <select id="country" name="country" class="form-control">
                                    @foreach($country as $count)
                                    <option value="{{$count}}">{{ $count }}</option>
                                    @endforeach
                                </select>

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="country" class="col-12">{{ __('Interest') }}</label>

                            <div class="col-12 multiselect">

                                <?php
                                $topic = topics();
                                ?>

                                <select id="interest" name="interest[]" multiple class="form-control">
                                    @foreach($topic as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password"
                                class="col-12">{{ __('Password') }}</label>

                            <div class="col-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-12">{{ __('Confirm Password') }}</label>

                            <div class="col-12">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection