@include('layouts.header') {{-- Nhúng file header.blade.php --}}

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span>
                    <span>Course Lists <i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-0 bread">Course Lists</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-lg-3 sidebar">
                <div class="sidebar-box bg-white ftco-animate">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box bg-white p-4 ftco-animate">
                    <h3 class="heading-sidebar">Course Category</h3>
                    <form action="#" class="browse-form">
                        <label><input type="checkbox" checked> Design &amp; Illustration</label><br>
                        <label><input type="checkbox"> Web Development</label><br>
                        <label><input type="checkbox"> Programming</label><br>
                        <label><input type="checkbox"> Music &amp; Entertainment</label><br>
                        <label><input type="checkbox"> Photography</label><br>
                        <label><input type="checkbox"> Health &amp; Fitness</label><br>
                    </form>
                </div>
            </div>

            {{-- Main Content --}}
            <div class="col-lg-9">
                <div class="row">
                    {{-- Khóa học 1 --}}
                    <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                        <div class="project-wrap">
                            <a href="#" class="img" style="background-image: url('{{ asset('images/work-1.jpg') }}');">
                                <span class="price">Software</span>
                            </a>
                            <div class="text p-4">
                                <h3><a href="#">Design for the web with Adobe Photoshop</a></h3>
                                <p class="advisor">Advisor <span>Tony Garret</span></p>
                                <ul class="d-flex justify-content-between">
                                    <li><span class="flaticon-shower"></span>2300</li>
                                    <li class="price">$199</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Khóa học khác (copy & chỉnh sửa nếu cần) --}}
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
        </div>
    </div>
</section>

@include('layouts.footer') {{-- Nhúng file footer.blade.php --}}
