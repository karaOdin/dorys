
@extends('layouts.app')
@section('content')
    <body class="h-100">
        <div class="container-fluid full-bg h-100">
           <div class="container h-100">
               <div class="row no-margin">
                   <div class="bg-layer  ">
                       <form method="POST" action="{{ route('login',app()->getLocale()) }}">
                        @csrf
                        <div class="login-box row">
                           <i class="fab fa-codepen"></i>
                            <h3>  {{ __("user") }}login

                            </h3>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                              </div>

                              <input type="email" class="form-control form-control-sm" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                              </div>
                              <input id="password" type="password" class="form-control form-control-sm" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1"  @error('password') is-invalid @enderror name="password" required autocomplete="current-password">

                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>

                            @if (Route::has('password.request')) <a  href="{{ route('password.request',app()->getLocale()) }}">
                              <p>  {{ __('Forgot Your Password?') }}</p>
                            </a>
                          @endif
                            <button class="btn btn-default">Click to Login</button>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label center" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                    </div>
                            @if (Route::has('register'))
                            <p class="no-c">Not a member yet? <a href="{{ route('register',app()->getLocale()) }}"{{ __('Register') }}>Create your Account</a></p>
                            @endif
                        </div>


                </form>
                    </div>
               </div>


           </div>

        </div>




<style>       /* ===================================== Login Page CSS ================================== */
input,
input::-webkit-input-placeholder {
  font-size: 18px;
  line-height: 3; }

.h-100 {
  height: 100%;
  width: 100%; }

.full-bg {
  background-image: url(../images/bg_2.jpg);
  background-size: cover;
  color: #FFF; }
  .full-bg h3 {
    color: #FFF;
    margin-bottom: 20px;
    width: 100%;
    text-align: center;
    font-size: 32px;
    margin-top: -20px; }
  .full-bg .form-control {
    background-color: #FFF;
    border-radius: 0px;
    padding: 8px;
    font-size: 20px; }
  .full-bg p {
    width: 100%;
    text-align: right;
    color: #FFF;
    text-decoration: underline;
    font-weight: 600; }
  .full-bg .btn {
    width: 100%;
    margin-top: 10px;
    padding: 8px;
    font-weight: 600;
    background-color: #FFF;
    color: #444; }
  .full-bg .logo {
    position: absolute;
    top: 0px;
    font-size: 38px;
    padding: 10px;
    color: #FFF;
    font-weight: 600; }
    .full-bg .logo a {
      color: #FFF; }
    @media screen and (max-width: 409px) {
      .full-bg .logo {
        font-size: 32px; } }
  .full-bg .foter-credit {
    position: absolute;
    bottom: 10px;
    right: 6%;
    font-size: 16px;
    padding: 10px;
    color: #FFF;
    font-weight: 600; }
    .full-bg .foter-credit a {
      color: #FFF; }
  .full-bg .bg-layer {
    width: 250px; }

.login-box {
  background-color: #fa7676;
  -webkit-box-shadow: -1px 2px 42px -2px rgba(0, 0, 0, 0.63);
  -moz-box-shadow: -1px 2px 42px -2px rgba(0, 0, 0, 0.63);
  box-shadow: -1px 2px 42px -2px rgba(0, 0, 0, 0.63);
  border-top: 5px solid #fa7676;
  text-align: center;
  padding: 20px;
  padding-bottom: 60px;
  padding-top: 20px;
  border-bottom-right-radius: 150px;
  border-bottom-left-radius: 150px; }
  .login-box .fa-codepen {
    float: none;
    margin: auto;
    font-size: 62px;
    margin-bottom: 20px; }
  .login-box h3 {
    color: #FFF;
    margin-top: 0px;
    font-size: 22px; }
  .login-box .input-group .input-group-prepend .input-group-text {
    background-color: #FFF;
    border-right: 0px; }
    .login-box .input-group .input-group-prepend .input-group-text i {
      font-size: 13px; }
  .login-box .input-group .form-control {
    border-left: 0px; }
  .login-box p {
    color: #FFF;
    font-family: "mouse-300", Arial, Helvetica, sans-serif;
    font-weight: 300; }
    .login-box p label {
      float: left;
      width: auto;
      padding: 0px; }
    .login-box p a {
      color: #FFF; }
  .login-box .no-c {
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    margin-bottom: 10px; }
    .login-box .no-c a {
      text-decoration: underline; }
        </style>


@endsection
