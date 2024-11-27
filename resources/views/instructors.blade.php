<!-- resources/views/instructors.blade.php -->

@include('layouts.header') {{-- Include header --}}

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span>
                    <span>Certified Instructor <i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-0 bread">Certified Instructor</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url('{{ asset('images/teacher-' . $i . '.jpg') }}');"></div>
                        </div>
                        <div class="text pt-3">
                            <h3><a href="#">Instructor {{ $i }}</a></h3>
                            <span class="position mb-2">Position {{ $i }}</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer') {{-- Include footer --}}
