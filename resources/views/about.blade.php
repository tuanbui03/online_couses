<!-- resources/views/about.blade.php -->
@include('layouts.header') {{-- Nhúng file header.blade.php --}}


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span>
                    <span>About us <i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-0 bread">About Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-about img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="d-flex about-wrap">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image:url('{{ asset('images/about-1.jpg') }}');">
                            </div>
                            <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url('{{ asset('images/about.jpg') }}');">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">Enhanced Your Skills</span>
                                <h2 class="mb-4">Learn Anything You Want Today</h2>
                                <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                                    the blind texts.
                                </p>
                                <p><a href="#" class="btn btn-primary">Get in touch with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('{{ asset('images/bg_4.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-online"></span></div>
                    <div class="text">
                        <strong class="number" data-number="400">0</strong>
                        <span>Online Courses</span>
                    </div>
                </div>
            </div>
            <!-- Các cột thống kê khác -->
        </div>
    </div>
</section>

@include('layouts.footer') {{-- Nhúng file footer.blade.php --}}
