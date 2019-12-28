@extends('main')

@section('content')
<div class="sliderContainer">
    <div class="mySlides faded"
        style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url({{ asset('img/slide-1.jpg') }})">

    </div>
    <div class="mySlides faded"
        style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url({{ asset('img/slide-2.jpg') }})">

    </div>
    <div class="mySlides faded"
        style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url({{ asset('img/slide-3.jpg') }})">

    </div>
    <div class="mySlides faded"
        style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url({{ asset('img/slide-4.jpg') }})">

    </div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <!--
    <div style="text-align:center" class="dot-div">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>-->

</div>
<!--Home page first section-->
<div class="container section-150">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/slide-4.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>This is the Intro Paragraph</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, aliquam sequi perferendis fugiat at
                eligendi maiores ex, repudiandae distinctio vitae quia. Quam et vitae illum, voluptatibus enim odio
                commodi. Enim a nam illo velit harum eligendi similique veniam? Dolorem exercitationem qui veniam
                explicabo fugit, dignissimos nostrum harum consequatur dolores, doloremque sit, nobis consectetur. Iusto
                sequi veniam qui animi ex magnam harum hic voluptatem provident corrupti voluptate itaque doloribus id
                reprehenderit, dolor nulla porro vel doloremque! Repudiandae impedit quod culpa esse. Veritatis eos
                incidunt, aspernatur maiores blanditiis asperiores. Repellendus itaque quod non, nobis ea minus.
                Doloribus
            </p>

        </div>
    </div>

</div>
<div class="container section-150 section-2">
    <div class="title-part">
        <h1>Why I Made This</h1>
    </div>
    <div class="row front-mid-icons-container">
        <div class="col-md-4 front-mid-icons">
            <div>
                <span><i class="fas fa-car"></i></span>

            </div>
            <div>
                <h4>This is a title</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, unde.
                </p>

            </div>
        </div>
        <div class="col-md-4 front-mid-icons">
            <div>
                <span><i class="fas fa-car"></i></span>

            </div>
            <div>
                <h4>This is a title</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, unde.
                </p>

            </div>
        </div>
        <div class="col-md-4 front-mid-icons">
            <div>
                <span><i class="fas fa-car"></i></span>

            </div>
            <div>
                <h4>This is a title</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, unde.
                </p>

            </div>
        </div>
    </div>

</div>
<div class="section-150 section-3"
    style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url({{ asset('img/slide-1.jpg') }})">
    <h1>
        Why I Made This?
    </h1>
    <a href="#">Learn More</a>


</div>
<div class="container section-150 section-4">
    <div class="title-part">
        <h1>Why I Made This</h1>
    </div>
    <div class="row articles-container">
        <div class="col-md-4 article">
            <div>
                <img src="{{ asset('img/slide-4.jpg') }}" alt="" class="img-fluid">

            </div>
            <div>
                <h4>This is a title</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto non unde alias, magnam quaerat
                    quisquam nisi quibusdam aut maxime, pariatur quidem sunt. Eveniet saepe fugiat accusamus, ratione
                    delectus ipsum quod, impedit repellendus, dicta autem aliquid totam sed sint aliquam expedita ad
                    ipsa cupiditate harum eum dolor. Doloribus mollitia quod ratione.
                </p>

            </div>
        </div>
        <div class="col-md-4 article">
            <div>
                <img src="{{ asset('img/slide-4.jpg') }}" alt="" class="img-fluid">

            </div>
            <div>
                <h4>This is a title</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto non unde alias, magnam quaerat
                    quisquam nisi
                    quibusdam aut maxime, pariatur quidem sunt. Eveniet saepe fugiat accusamus, ratione delectus ipsum
                    quod, impedit
                    repellendus, dicta autem aliquid totam sed sint aliquam expedita ad ipsa cupiditate harum eum dolor.
                    Doloribus
                    mollitia quod ratione.
                </p>

            </div>
        </div>
        <div class="col-md-4 article">
            <div>
                <img src="{{ asset('img/slide-4.jpg') }}" alt="" class="img-fluid">

            </div>
            <div>
                <h4>This is a title</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto non unde alias, magnam quaerat
                    quisquam nisi
                    quibusdam aut maxime, pariatur quidem sunt. Eveniet saepe fugiat accusamus, ratione delectus ipsum
                    quod, impedit
                    repellendus, dicta autem aliquid totam sed sint aliquam expedita ad ipsa cupiditate harum eum dolor.
                    Doloribus
                    mollitia quod ratione.
                </p>

            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
<script src="{{ asset('js/slider.js') }}"></script>

@endsection