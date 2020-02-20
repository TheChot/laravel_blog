@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="error-alert" id="toast">
    <p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> {{$error}}</p>

</div>
@endforeach
@endif

@if (session('success'))
<div class="success-alert" id="toast">
    <p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> {{session('success')}}</p>

</div>
@endif

@if (session('error'))
<div class="error-alert" id="toast">
    <p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> {{session('error-alert')}}</p>

</div>
@endif