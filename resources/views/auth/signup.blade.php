@extends('layouts.main')

@section('content')
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Raleway, sans-serif;
    }

    .screen {
        background: linear-gradient(90deg, #CCA177, #052750);
        position: relative;
        height: 700px;
        width: auto;
        box-shadow: 0px 0px 24px #BA9256;
        align-content: center;
    }

    .screen__content {
        z-index: 1;
        position: relative;
        height: 100%;
    }

    .screen__background {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        -webkit-clip-path: inset(0 0 0 0);
        clip-path: inset(0 0 0 0);
    }

    .screen__background__shape {
        transform: rotate(45deg);
        position: absolute;
    }

    .screen__background__shape1 {
        height: 520px;
        width: 520px;
        background: #F3F3F3;
        top: -50px;
        right: 120px;
        border-radius: 0 72px 0 0;
    }

    .screen__background__shape2 {
        height: 220px;
        width: 220px;
        background: #041E3E;
        top: -172px;
        right: 0;
        border-radius: 32px;
    }

    .screen__background__shape3 {
        height: 540px;
        width: 190px;
        background: linear-gradient(270deg, #CCA177, #03152B);
        top: -24px;
        right: 0;
        border-radius: 32px;
    }

    .screen__background__shape4 {
        height: 400px;
        width: 201px;
        background: #031A35;
        top: 520px;
        right: 50px;
        border-radius: 60px;
    }

    .signup {
        width: 100%;
        /* padding: 30px; */
        padding-top: 60px;
    }

    .signup__field {
        padding: 12px 0px;
        position: relative;
    }

    .signup__icon {
        position: absolute;
        top: 30px;
        color: #7875B5;
    }

    .signup__input {
        border: none;
        border-bottom: 2px solid #D1D1D4;
        background: none;
        padding: 10px;
        padding-left: 24px;
        font-weight: 700;
        width: 100%;
        transition: .2s;
    }

    .signup__input:active,
    .signup__input:focus,
    .signup__input:hover {
        outline: none;
        border-bottom-color: #03152B;
    }

    .button__icon {
        margin-left: auto;
        color: #fff;
    }

    .social-signup {
        position: absolute;
        height: 140px;
        width: 160px;
        text-align: center;
        bottom: 0px;
        right: 0px;
        color: #fff;
    }

    .social-icons {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .social-signup__icon {
        padding: 20px 10px;
        color: #fff;
        text-decoration: none;
        text-shadow: 0px 0px 8px #7875B5;
    }

    .social-signup__icon:hover {
        transform: scale(1.5);
    }

    .background-color {
        background: rgb(2, 16, 33, 0.82);
    }

    .background-color-1 {
        background-color: rgb(2, 16, 33, 0.79);
    }

    .title-h3 {
        margin-top: 10px;
        margin-bottom: 0px;
    }

    .signup__submit {
        background-image: linear-gradient(to right, #603813 0%, #b29f94 51%, #603813 100%)
    }

    .signup__submit {
        font-size: 14px;
        margin-top: 5px;
        padding: 10px 20px;
        border-radius: 26px;
        border: none;
        text-transform: capitalize;
        /* font-weight: 700; */
        display: flex;
        align-items: center;
        width: 60%;
        color: #fff;
        box-shadow: 0px 20px 25px #BA9256;
        cursor: pointer;
        transition: .2s;
        background-size: 200% auto;
    }

    .signup__submit:hover {
        background-position: right center;
        color: #fff;
        text-decoration: none;
    }

    .button__text_left {
        text-align: left;
        margin-top: 8px;
        color: #252F4D;
        font-size: 1.3rem;
        font-weight: 100;
    }
</style>
<!-- Start breadcumb Area -->
<!-- <div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3>Login</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End breadcumb Area -->
<!-- Start Slider Area -->
<div class="background-color">
    <div class="background-color-1">
        <div class="signup-area page-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="login-page signup-page">
                            <div class="screen">
                                <div class="screen__content">
                                    <form class="signup">
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                                            <h3 class="title-h3" style="font-size: 2.5rem;color:#151b2c;padding-bottom:0px">Sign Up Now</h3>
                                            <small style="font-size: 1.1rem;"><i class=" fa fa-info-circle"></i> Sign Up for SmartTrade to learning more about SmartTrader platform</small>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <div class="signup__field">
                                                <i class="signup__icon fa fa-user"></i>
                                                <input type="text" class="signup__input" placeholder="First Name" required data-error="Please enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <div class="signup__field">
                                                <i class="signup__icon fa fa-user" style="opacity: .5;"></i>
                                                <input type="text" class="signup__input" placeholder="Last Name" required data-error="Please enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <div class="signup__field">
                                                <i class="signup__icon fa fa-envelope"></i>
                                                <input type="email" class="signup__input" placeholder="Email" required data-error="Please enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <div class="signup__field">
                                                <i class="signup__icon fa fa-lock"></i>
                                                <input type="password" class="signup__input" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <div class="signup__field">
                                                <i class="signup__icon fa fa-lock" style="opacity: .5;"></i>
                                                <input type="password" class="signup__input" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <button class="button signup__submit">
                                                <span class="button__text">Sign Up</span>
                                                <i class="button__icon fa fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-10 col-sm-12 col-xs-12 button__text_left">
                                            <div class="col-md-12">
                                                <span><a href="{{url('login')}}" style="color: #252F4D;">Sign In ?</a></span>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="social-signup">
                                        <h3 style="font-size: 2.2rem;">SmartTrader</h3>
                                        <div class="social-icons">
                                            <a href="#" class="social-signup__icon fa fa-facebook"></a>
                                            <a href="#" class="social-signup__icon fa fa-twitter"></a>
                                            <a href="#" class="social-signup__icon fa fa-instagram"></a>
                                            <a href="#" class="social-signup__icon fa fa-linkedin"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="screen__background">
                                    <span class="screen__background__shape screen__background__shape4"></span>
                                    <span class="screen__background__shape screen__background__shape3"></span>
                                    <span class="screen__background__shape screen__background__shape2"></span>
                                    <span class="screen__background__shape screen__background__shape1"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- all js here -->
@endsection