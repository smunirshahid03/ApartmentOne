@extends('Website.layouts.master')
@section('content')

<section class="login-register-sec" style="background-image: url({{ asset('assets/images/login-banner.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text text-center">
                    <h3>Get Started</h3>
                    <h2>Login To Your Account </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br> industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class="form-box">
                    <form>
                        <input type="email" placeholder="Email Address" required>
                        <input type="password" placeholder="Password" required>
                        <div class="forms-btns-inline">
                            <button>Login</button>
                            <a href="{{ route('register') }}">Create a New Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection