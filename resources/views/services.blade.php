<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href= "{{ asset('css/services.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Services')
    
</head>
<body>
    @extends('includes.header')
    
    @section('content')
    
    <div class="services pd">
      <div class="container">
        <h3 class="title">Services</h3>
        <div class="row text-center">
          <div class="col-md-3">
            <div class="square"><i class="fas fa-code"></i></div>
            <div class="serv">
              <h5>Clean Code</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="serv">
              <div class="square"><i class="fas fa-cogs"></i></div>
              <h5>Problem Solving</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="square"><i class="fas fa-globe"></i></div>
            <div class="serv">
              <h5>Best Domain</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="square"><i class="fas fa-user-shield"></i></div>
            <div class="serv">
              <h5>Secure Website</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
</body>
</html>