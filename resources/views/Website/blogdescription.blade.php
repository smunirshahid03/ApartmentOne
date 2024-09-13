@extends('Website.layouts.master')
@section('content')

<section class="home-sec-01" style="background-image: url({{ asset('assets/images/blog-details-banner.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h2>Blogs </h2>
                    <h1>Real estate and property<br> management</h1>      
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-sec-02 home-sec-04 blog-des-sec-01 ">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-12">
                <div class="img-box">
                    <img src="{{ asset('assets/images/blog-des-sec-01-img-01.png')}}" alt="">
                </div>

            </div>

            <div class="col-lg-6 col-md-12">
                <div class="text text-left-pading">
                    <h2>Tailored Real Estate Solutions</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text content-box">
                    <h2>How to Avail Apartment One’s<br> Management Services </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="text content-box">
                    <h2>Lorem Is Simply  </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="large-img-box">
                    <img src="{{ asset('assets/images/blog-des-sec-01-img-02.png')}}" alt="">
                </div>
                <div class="text content-box">
                    <h2>Lorem Is Simply A Dummy Text </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="text content-box">
                    <h2>What Is The Main Criteria to<br> get paid for rentals    </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="home-sec-07 blog-sec-01  blog-des-sec-02">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="align-two-things">
                    <div class="text">
                        <h3>Related Blogs</h3>
                        <h2>More News Related To<br> This One</h2>
                    </div> 

                    <a href="{{ route('blog') }}" class="t-btn t-btn-blue">See All Blogs</a>

                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="blog-parent-box">
                   <div class="img-box">
                    <img src="{{ asset('assets/images/blog-parent-img.png')}}" alt="">
                    <h6>Latest</h6>
                   </div>
                    <div class="text">
                        <h5>Real estate and property management</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        <a href="{{ route('blogdescription') }}" class="t-btn t-btn-blue">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blog-parent-box">
                   <div class="img-box">
                    <img src="{{ asset('assets/images/blog-parent-img.png')}}" alt="">
                    <h6>Latest</h6>
                   </div>
                    <div class="text">
                        <h5>Real estate and property management</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        <a href="{{ route('blogdescription') }}" class="t-btn t-btn-blue">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blog-parent-box">
                   <div class="img-box">
                    <img src="{{ asset('assets/images/blog-parent-img.png')}}" alt="">
                    <h6>Latest</h6>
                   </div>
                    <div class="text">
                        <h5>Real estate and property management</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        <a href="{{ route('blogdescription') }}" class="t-btn t-btn-blue">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blog-parent-box">
                   <div class="img-box">
                    <img src="{{ asset('assets/images/blog-parent-img.png')}}" alt="">
                    <h6>Latest</h6>
                   </div>
                    <div class="text">
                        <h5>Real estate and property management</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        <a href="{{ route('blogdescription') }}" class="t-btn t-btn-blue">Read More</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>



@endsection