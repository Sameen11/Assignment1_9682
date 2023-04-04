<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Carpool.pk')
</head>
<body>
    @extends('includes.header')

    @section('content')
    <div class="row" style="margin: 50px;">
        <div class="col-md-3">
            <img src="{{ asset('images/img1.jpg') }}" class="img-thumbnail">
        </div>
        <div class="col-md-6">
            <p>
                <h3>
                    Carpool.pk
                </h3>
                Carpool.pk is a carpooling service that connects drivers and passengers for ridesharing purposes in Pakistan. The service aims to reduce traffic congestion, promote eco-friendly transportation options, and provide an affordable alternative to traditional transportation methods
            </p>

        </div>
    </div>
    <div class="row" style="margin:50px">
        <div class="col-md-6">
            <p>
                <br><br><br>
                 Carpool.pk offers a user-friendly platform that allows drivers and passengers to easily find and connect with each other. Drivers can list their available rides and passengers can search for rides that match their destinations and schedules. The service also provides tools for users to communicate and coordinate their rides, ensuring a smooth and seamless experience for all parties involved.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/img2.jpg') }}" class="img-thumbnail">    
        </div>
    </div>
    @endsection
</body>
</html>