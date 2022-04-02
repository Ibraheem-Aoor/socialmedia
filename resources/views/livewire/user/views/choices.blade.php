<div>
    @section('links')
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('home') }}" class="nav-item nav-link">Feature</a>
                <a href="{{ route('home') }}" class="nav-item nav-link">How it work</a>
            </div>
            <a href="index.html#feature" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Start
                Now</a>
        </div>
    @endsection
    <!-- choices Start -->
    <div class="container-xxl py-5" style="margin-top:-140px;">
        <div class="container py-5 px-lg-5">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">{{ $content->choices_section_headline_1 }}</h5>
                <h1 class="mb-5" style="color:#fff">{{ $content->choices_section_headline_2 }}</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="far fa-thumbs-up fa-3x text-white"></i>
                        </div>
                        <h4 class="mt-4 mb-3" style="color:#000;"><a href="#"
                                wire:click.prevent="goToPage('{{ $content->choices_section_card_1_headline }}')"
                                style="color:#000;">{{ $content->choices_section_card_1_headline }}</a></h3>
                            <a href="#"
                                wire:click.prevent="goToPage('{{ $content->choices_section_card_1_headline }}')">
                                <p class="mb-0 details">{{ $content->choices_section_card_1_paragraph }}</p>
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="mt-4 mb-3" style="color:#000;"><a href="#"
                                wire:click.prevent="goToPage('{{ $content->choices_section_card_2_headline }}')"
                                style="color:#000;">{{ $content->choices_section_card_2_headline }}</a>
                        </h4>
                        <a href="#" wire:click.prevent="goToPage('{{ $content->choices_section_card_2_headline }}')">
                            <p class="mb-0 details">{{ $content->choices_section_card_2_paragraph }}</p>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="far fa-eye fa-3x text-white"></i>

                        </div>
                        <h4 class="mt-4 mb-3" style="color:#000;"><a href="#"
                                wire:click.prevent="goToPage('{{ $content->choices_section_card_3_headline }}')"
                                style="color:#000;">{{ $content->choices_section_card_3_headline }}</a></h4>
                        <a href="#" wire:click.prevent="goToPage('{{ $content->choices_section_card_3_headline }}')">
                            <p class="mb-0 details">{{ $content->choices_section_card_3_paragraph }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choices Start -->
</div>
