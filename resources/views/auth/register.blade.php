@extends('templates.studio_v30.middleware')

@section('title', 'Register')

@section('content')   
    <div class="login-content"> 
 
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-center">Sign Up</h1>
            <p class="text-muted text-center">Registration to access the services.</p>
            <div class="mb-3">
                <label class="form-label">Name <span class="text-danger">*</span></label>
                <x-jet-input id="name" class="form-control form-control-lg fs-15px" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address <span class="text-danger">*</span></label> 
                <x-jet-input id="email" class="form-control form-control-lg fs-15px" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Password <span class="text-danger">*</span></label>
                <x-jet-input id="password" class="form-control form-control-lg fs-15px" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password <span class="text-danger">*</span></label> 
                <x-jet-input id="password_confirmation" class="form-control form-control-lg fs-15px" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div> 

            <!-- <div class="mb-3">
                <label for="email_confirmation_token">{{ __('Email Confirmation Token') }}</label>
                <input id="email_confirmation_token" type="text" name="email_confirmation_token" required autocomplete="off">
            </div> -->

            <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-lg fs-15px fw-500 d-block w-100">Sign Up</button>
            </div>
            <div class="text-muted text-center  mb-4">
                Already have an Admin ID? <a href="{{ route('login') }}">Sign In</a>
            </div>

            
            {!! define_auth("Register", "google") !!}
            {!! define_auth("Register", "github") !!} 
        </form>
    </div>

@endsection
