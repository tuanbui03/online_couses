<!-- resources/views/index.blade.php -->
@include('layouts.header')

<div class="hero-wrap js-fullheight" style="background-image: url('../../public/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <span class="subheading">Welcome to StudyLab</span>
                <h1 class="mb-4">We Are Online Platform For Learning</h1>
                <p class="caps">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                <p class="mb-0">
                    <a href="#" class="btn btn-primary">Our Course</a>
                    <a href="#" class="btn btn-white">Learn More</a>
                </p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5 order-md-last">
                <div class="login-wrap p-4 p-md-5">
                    <h3 class="mb-4">Register Now</h3>
                    <form action="#" class="signup-form">
                        <div class="form-group">
                            <label class="label" for="name">Full Name</label>
                            <input type="text" class="form-control" placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label class="label" for="email">Email Address</label>
                            <input type="text" class="form-control" placeholder="johndoe@gmail.com">
                        </div>
                        <div class="form-group">
                            <label class="label" for="password">Password</label>
                            <input id="password-field" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="label" for="password">Confirm Password</label>
                            <input id="password-field" type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary submit">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                    <p class="text-center">
                        Already have an account? <a href="#">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
