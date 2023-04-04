<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Contact')
</head>
<body>
    @extends('includes.header')

    @section('content')
    <div class="row" style="margin-top:100px; margin-bottom:130px;">
        <div class="col-md-3" style="margin-left:130px; margin-top:130px;">
            <h3>Contact Us</h3>
            <p>To contact us for more information or to provide feedback, please reach out to us at the following:
            </p>
        </div>
        <div class="col-md-4">
            <form action="{{url('/')}}/contact" method="post">
                @csrf
            
                <div class="form-group">
                    <label>Name.</label>
                    <input type="string" name="name" class="form-control" placeholder="enter your full name">
                </div>
                <div class="form-group">
                    <label>Email.</label>
                    <input type="email" name="email" class="form-control" placeholder="enter your email">
                </div>
                <div class="form-group">
                    <label>Moblie.</label>
                    <input type="int" name="mobile" class="form-control" placeholder="enter mobile number">
                </div>
                <div class="form-group">
                    <label>Message.</label>
                    <textarea name="message"class="form-control" cols="74" rows="4" placeholder="Type your message...."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>