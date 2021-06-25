<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
</head>

<body>
<h1>Your reservation for</h1>
    <p>room type:{{$reservationData->roomReserve->room_type}}</p>
    <p>checkIn date:{{$reservationData->checkIn_date}}</p>
    <p>checkIn date: {{$reservationData->checkOut_date}}</p>
    <p>Price{{$reservationData->price}}</p>
    <p>has been cancel. thank you </p>

</html>