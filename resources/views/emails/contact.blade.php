<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Email</title>
</head>

<body>

    <h2>You have a message from {{$data->first_name.' '.$data->last_name}}</h2>
    <h3>{{$data->phone_number}}</h3>
    <h3>{{$data->email}}</h3>
    <p>{{$data->body}}</p>


</body>

</html>