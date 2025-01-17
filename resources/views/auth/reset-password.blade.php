@extends('layouts.frontapp')
@section('content')
<div class="it-breadcrumb-area it-breadcrumb-bg" data-background="assets/img/breadcrumb/breadcrumb.jpg">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="it-breadcrumb-content z-index-3 text-center">
                    <div class="it-breadcrumb-title-box">
                        <h3 class="it-breadcrumb-title">Forgot Password ?</h3>
                    </div>
                    <div class="it-breadcrumb-list-wrap">
                        <div class="it-breadcrumb-list">
                            <span><a href="/">home</a></span>
                            <span class="dvdr">//</span>
                            <span>Forgot Password</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="it-signup-area pt-120 pb-120">
    <div class="container">
        <div class="it-signup-bg p-relative">
            <div class="it-signup-thumb d-none d-lg-block">
                <img src="{{asset('assets/img/contact/signup.jpg')}}" alt>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                        <div class="it-signup-wrap">
                            <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="it-signup-input mb-10">
                            <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$request->email}}" required autofocus autocomplete="username" placeholder="email"/>
                            </div>
                            <div class="it-signup-input mb-10">
                                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="New Password"/>
                            </div>
                            <div class="it-signup-input mb-10">
                                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
                            </div>
                            <div class="it-signup-btn mb-40 mt-20">
                                <button class="it-btn large">Reset Password</button>
                            </div>
                          </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection