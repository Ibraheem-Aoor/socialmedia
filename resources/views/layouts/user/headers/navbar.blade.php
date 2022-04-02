<!-- Navbar & Hero Start -->
@php
    $content = App\Models\Admin\Content::first();
@endphp
<div class="container-xxl position-relative p-0 mb-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{route('home')}}" class="navbar-brand p-0">
            <h1 class="m-0" style="color:#fff">SocialMedia
            </h1>
            <span style="color: red;">2022</span>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" id="menuButton" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        @yield('links')
    </nav>

    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated slideInDown">{{$content->intro_text}}</h1>
                    <p class="text-white pb-3 animated slideInDown">{{$content->intro_text_paragraph}}</p>
                    <a href="#proccess"
                        class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
