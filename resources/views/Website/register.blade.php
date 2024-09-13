@extends('Website.layouts.master')
@section('content')

<section class="login-register-sec" style="background-image: url({{ asset('assets/images/login-banner.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text text-center">
                    <h3>Welcome To Apartment One</h3>
                    <h2>Please Fill The Details To Get Stated </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br> industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class="form-box">
                    <form>
                        <input type="text" placeholder="Full Name" required>
                        <input type="email" placeholder="Email Address" required>
                        <input type="tel" placeholder="Contact Number" required>
                        <textarea placeholder="Address" required></textarea>
                        <input type="password" placeholder="Password" required>
                        <input type="password" placeholder="Confirm Password" required>
                        <input type="text" placeholder="Bank Document Needed" required>
                        <div class="forms-btns-inline">
                            <button>Create An Account</button>
                            <a href="{{ route('login') }}">Back To Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection