@extends('main')

@section('page-name')


@endsection

@section('content')
@include('inc.top_image')
<div class="container top-title">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us</h1>
        </div>

    </div>
</div>
<div class="container">
    <div class="contact-area row">
        <div class="contact-details col-md-6">
            <h4>Contact Details</h4>
            <div>
                <div class='row det'>
                    <div class="col-xs-4">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <div class="col-xs-8">
                        <h5>Im the div with the contact dets</h5>
                        <p><em>These are the details</em> </p>
                    </div>
                </div>
                <div class='row det'>
                    <div class="col-xs-4">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <div class="col-xs-8">
                        <h5>Im the div with the contact dets</h5>
                        <p><em>These are the details</em> </p>
                    </div>
                </div>
                <div class='row det'>
                    <div class="col-xs-4">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <div class="col-xs-8">
                        <h5>Im the div with the contact dets</h5>
                        <p><em>These are the details</em> </p>
                    </div>
                </div>
            </div>



        </div>
        <div class="contact-form col-md-6">
            <h4>Submit a Contact Form</h4>
            <form action="{{route('contact_submit')}} " method="post">
                @csrf
                <div class="form-group">
                    <label for="first-name">First Names <em>Required</em></label>
                    <input type="text" class="form-control" id="first-name" placeholder="Enter Your First Names"
                        name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name <em>Required</em></label>
                    <input type="text" class="form-control" id="last-name" placeholder="Enter Your Last Name"
                        name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address <em>Required</em></label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email"
                        required>
                </div>
                <div class="form-group">
                    <label for="phone-number">Phone Number</label>
                    <input type="text" class="form-control" id="phone-number" placeholder="Enter Your Last Name"
                        name="phone_number" required>
                </div>
                <div class="form-group">
                    <label for="body">Body <em>Required</em></label>
                    <textarea class="form-control" id="body" rows="5" name="body" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-primary btn">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
@section('scripts')


@endsection