@extends('main')

@section('content')
<div class="top-image dark-blue-bottom">
    <h1>COPPERPLANET</h1>
</div>
<section class="home-section-1 black-bg dark-blue-bottom">
    <div class="container">
        <div class="text-area">
            <h1>Premium Software Services</h1>
            <p>
                Working with our clients to provide IT and Software solutions to optimize and enhance your
                business.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="site-card half-black-bg">
                    <div class="site-card-img">
                        <img src="{{asset('img/pic2.jpg')}}" alt="copperplanet image.jpg" class="img-fluid" srcset="">
                    </div>
                    <div class="site-card-text">
                        <h4>Web Development</h4>
                        <p>
                            We collaborate with our clients to design the perfect website
                            to match you and your business and with excellent after sales service
                            we will ensure that your website is up to date with your business needs
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="site-card half-black-bg">
                    <div class="site-card-img">
                        <img src="{{asset('img/pic6.jpg')}}" alt="copperplanet image.jpg" class="img-fluid" srcset="">
                    </div>
                    <div class="site-card-text">
                        <h4>App Development</h4>
                        <p>
                            Planning to reach your clients on mobile? We have you covered!
                            Our app development team will develop an app designed for your business
                            needs, giving you a new way to communicate with your clients!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="site-card half-black-bg">
                    <div class="site-card-img">
                        <img src="{{asset('img/pic3.jpg')}}" alt="copperplanet image.jpg" class="img-fluid" srcset="">
                    </div>
                    <div class="site-card-text">
                        <h4>Hosting</h4>
                        <p>
                            We provide competitivly priced hosting packages for your emails and your websites.
                            And we provide excellent support to cater to your business.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="site-card half-black-bg">
                    <div class="site-card-img">
                        <img src="{{asset('img/pic4.jpg')}}" alt="copperplanet image.jpg" class="img-fluid" srcset="">
                    </div>
                    <div class="site-card-text">
                        <h4>Social Media Marketing</h4>
                        <p>
                            Reaching your clients digitally has become more important than ever.
                            Let us help you do so! Our posts are designed for engagement!
                            Whether its on your Facebook or an email marketing campaing let us take charge of your
                            digital marketing
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<section class="home-section-2 dark-blue-bottom black-bg">
    <div class="row no-gutters">
        <div class="col-lg-6">
            <div class="text-area">
                <h1>Our Mission</h1>
                <div class="icon-left-area">
                    <h1 class="icon-left"><i class="fas fa-magnet"></i></h1>
                    <h5>Design To Engage</h5>
                    <p>Whether its our websites, our apps or our social media marketting we aim to engage with your
                        clients and ensure your business message is seen and understood</p>
                </div>
                <div class="icon-left-area">
                    <h1 class="icon-left"><i class="fas fa-cogs"></i></h1>
                    <h5>Fully Functional</h5>
                    <p>We ensure that every part of your website or app works to specification to give you peace of mind
                        when interacting with your clients with our technology</p>
                </div>
                <div class="icon-left-area">
                    <h1 class="icon-left"><i class="fas fa-people-carry"></i></h1>
                    <h5>Premium Service</h5>
                    <p>
                        We aim to provide you with excellent service and support, allowing you to worry less about your
                        tech and focus more on your business
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 bg-image dark-blue-border-left">
            {{-- <img src="{{asset('img/pic1.jpg')}}" alt="copperplanet image.jpg" class="img-fluid" srcset=""> --}}
        </div>
    </div>

</section>
<section class="home-section-1 black-bg dark-blue-bottom">
    <div class="container">
        <div class="text-area">
            <h1>Our Projects</h1>
            <p>
                We work with our clients to provide web solutions that meet their needs. Take a look at what we have
                provided.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="site-card half-black-bg">
                    <div class="site-card-img">
                        <img src="{{asset('img/melologo.jpg')}}" alt="copperplanet image.jpg" class="img-fluid"
                            srcset="">
                    </div>
                    <div class="site-card-text">
                        <h4>Melo Cleaning Services</h4>
                        <p>
                            We developed an app for Melo Cleaning Services to help them get in touch with their clients
                            better than before.
                            With more updates on the way we aim to give their clients ease of access and keep their
                            audience glued to their message.
                        </p>
                        <h5><a class="site-button"
                                href="https://play.google.com/store/apps/details?id=com.copperplanet.melocleaning"
                                target="_blank" rel="noopener noreferrer">See More</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="site-card half-black-bg">
                    <div class="site-card-img">
                        <img src="{{asset('img/pic5.jpg')}}" alt="copperplanet image.jpg" class="img-fluid" srcset="">
                    </div>
                    <div class="site-card-text">
                        <h4>Netlogistics</h4>
                        <p>
                            We developed their logistics and trading website. Designed to communicate their message
                            efficiently and effectivly and display the vast array of products they offer their clients
                            both locally and abroad
                        </p>
                        <h5><a class="site-button" href="http://www.netlogistics.co.ke/" target="_blank"
                                rel="noopener noreferrer">See More</a></h5>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="site-card half-black-bg">
                    <div class="site-card-img">
                        <img src="{{asset('img/pic1.jpg')}}" alt="copperplanet image.jpg" class="img-fluid" srcset="">
        </div>
        <div class="site-card-text">
            <h4>App Development</h4>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorem obcaecati neque ad
                dolore cumque a quo sint voluptate quisquam?
            </p>
        </div>
    </div>
    </div> --}}
    </div>
    <div class="button-area">
        <h1>MORE SOON</h1>
    </div>
    </div>
</section>
<section class="home-section-3 black-bg dark-blue-bottom">
    <div class="row no-gutters">
        <div class="col-lg-6 bg-image dark-blue-border-right"></div>
        <div class="col-lg-6">
            <div class="form-area">
                <h2>Contact Us</h2>
                <p>Leave us a message and we shall get back to you ASAP <br><em>Fields with * are required</em></p>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                @endif
                @if (session()->has('contact-success'))
                <div class="alert alert-success" role="alert">
                    {{session('contact-success')}}
                </div>
                @endif
                <form method="POST" action="{{route('contact_home_submit')}}" id="contact-form">
                    @csrf
                    <label for="name">Name*</label>
                    <input type="text" name="name" required>
                    <label for="email">Email*</label>
                    <input type="text" name="email" required>
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number">
                    <label for="company">Company</label>
                    <input type="text" name="company">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject">
                    <label for="body">Message*</label>
                    <textarea name="body" id="" cols="30" rows="5"></textarea>
                    <button type="submit" class="g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit'
                        data-action='submit'>SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="footer-section black-bg">

    <h1>COPPERPLANET</h1>
    <p>Zambia's Premium Software Company</p>
    <p>Phone Number: 0978967632 || 0962153218</p>
    <p>Lusaka, Zambia</p>

</section>
@endsection
@section('scripts')
{{-- <script src="{{ asset('js/slider.js') }}"></script> --}}
<script src="https://www.google.com/recaptcha/api.js?render=6Ldak7UZAAAAAOFj1GY-k2r3naTqu-oDk6ferFup"></script>
<script>
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
</script>
@endsection