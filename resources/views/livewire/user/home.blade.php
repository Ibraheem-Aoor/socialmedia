<div>
    @section('links')
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="#home" class="nav-item nav-link">{{$content->nav_link_1}}</a>
                <a href="#feature" class="nav-item nav-link">{{$content->nav_link_2}}</a>
                <a href="#proccess" class="nav-item nav-link">{{$content->nav_link_3}}</a>
            </div>
            <a href="#feature" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Start
                Now</a>
        </div>
    @endsection
    <div class="container-xxl py-5" style="margin-top:-140px;" id="proccess">
        <div class="container py-5 px-lg-5">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">{{ $content->proccess_section_headline_1 }}</h5>
                <h1 class="mb-5" style="color:#fff">{{ $content->proccess_section_headline_2 }}</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                         {{-- <i class="far fa-ballot-check text-white"></i>  --}}
                         <i class="fa fa-cog fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">{{ $content->proccess_section_card_1_headline }}</h5>
                        <p class="mb-0 details">
                            {{ $content->proccess_section_card_1_paragraph }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-address-card fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">{{ $content->proccess_section_card_2_headline }}</h5>
                        <p class="mb-0 details">
                            {{ $content->proccess_section_card_2_paragraph }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-check fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">{{ $content->proccess_section_card_3_headline }}</h5>
                        <p class="mb-0 details">{{ $content->proccess_section_card_3_paragraph }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->



    <!-- platforms Start -->
    <div class="container-xxl py-5" id="feature">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">{{ $content->platforms_section_headline_1 }}</h5>
                <h1 class="mb-5" style="color:#fff">{{ $content->platforms_section_headline_2 }}</h1>
            </div>
            <div class="row g-4">
                @foreach ($platforms as $platform)
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <a href="{{ route('choices' , $platform->id) }}" style="width: 100%;">
                                <div class="d-inline-flex align-items-center justify-content-center  rounded-circle mb-4"
                                    style="width: 60px; height: 60px;">
                                    <img src="{{ asset('assets/dist_2/img/platforms/'.$platform->name.'.png') }}" alt="" width="40px"
                                        style="background-color: none;">
                                </div>
                                <h5 class="mb-3"><a href="{{ route('choices' , $platform->id) }}"
                                        style="color: black;font-size:larger; font-weight:900;">{{$platform->name}}</a></h5>
                                <a href="{{ route('choices', $platform->id) }}" class="m-0">
                                    <p class="details">{{$platform->description}}</p>
                                </a>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Features End -->
</div>
