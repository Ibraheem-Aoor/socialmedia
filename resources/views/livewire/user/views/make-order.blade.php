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
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-6 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <h4 class="mt-4 mb-3" style="color:#000;">Enter Profile
                                URL:</h3>
                            <p class="mb-0 details">
                            <form action="" wire:submit.prevent="makeOrder">
                                <div class="form-group">
                                    <input type="text" placeholder="url.." class="form-control" wire:model.lazy="url">
                                    @error('url')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div><br>
                                <div class="form-group">
                                    <button type="submit"  class="btn btn-primary-gradient">Submit</button>
                                </div>
                            </form>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choices Start -->
</div>
