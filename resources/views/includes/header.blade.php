<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CDN -->
        <!-- <link rel="stylesheet" type="text/css" href="mystyle.css"> -->
        
        <link rel="stylesheet" href= "{{ asset('css/messages.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;"> -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo2.jpg') }}" alt="Logo" style="width:200px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/"><h3>Home</h3> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about"><h3>About</h3> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services"><h3>Services</h3> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact"><h3>Contact</h3> <span class="sr-only"></span></a>
                </li>
                <div class="topnav-right">
                    <li class="nav-item">
                        <a class="nav-link" href="contactmessages">Messages <span class="sr-only"></span></a>
                    </li>
                </div>            
            </ul>
        </div>
    </nav>
    @yield('content') 
            <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3"  style ="color:white;"> © 2023 Copyright:
            <a class="text-lightblue" href="https://www.riphah.edu.pk">Riphah Internationl Univerisity</a>
        </div>
        <!-- Copyright -->
        </footer>

</body>
</html>