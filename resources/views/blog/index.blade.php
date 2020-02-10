@extends('main')

@section('page-name')


@endsection

@section('content')
@include('inc.top_image')
<div class="container top-title">
    <div class="row">
        <div class="col-md-12">
            <h1>
                ALL NEWS
            </h1>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="blog-side-panel">
                <div class="blog-main-img">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
                <div class="info">
                    <h3>Read Our News</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus modi velit suscipit cupiditate
                        obcaecati perspiciatis sit quae sapiente optio odit, iste consequatur quod, voluptatum est?
                    </p>
                </div>
                <div class="info-middle">
                    <h4>Featured Posts</h4>
                    <div class="links">
                        @if (count($featured_blogs) > 0)
                        @foreach ($featured_blogs as $featured_blog)
                        <a href="{{route('blog.single', $featured_blog->id)}}">
                            <h5>{{$featured_blog->title}}</h5>
                        </a>
                        <p>{{$featured_blog->created_at}}</p>
                        @endforeach
                        @else
                        <h5>No Featured Articles</h5>
                        @endif



                    </div>
                </div>
                <div class="info-bottom">
                    <h4>Follow us</h4>
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>

            </div>
        </div>
        <div class="col-md-8 blog-post-area">
            @if (count($blogs) > 0)
            @foreach ($blogs as $blog)
            <a href="{{route('blog.single', $blog->id)}}">
                <div class="blog-post">
                    <div class="row">
                        <div class="col-sm-4">
                            <img style="width:100%" src="storage/media/blog_images/{{$blog->cover_img}}">

                        </div>
                        <div class="col-sm-8">
                            <h2>{{$blog->title}} </h2>
                            <p>{{$blog->created_at}}</p>

                        </div>
                    </div>
                </div>
            </a>

            @endforeach
            {{-- Shows pagination links --}}
            {{$blogs->links()}}
            @else
            <h1>
                No Blogs
            </h1>

            @endif



        </div>
    </div>
</div>

@endsection
@section('scripts')


@endsection