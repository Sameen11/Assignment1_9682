<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Edit')
</head>
<body>
    @extends('includes.header')

    @section('content')
    <div class="row">
        <div  class="col-md-12">
            <br>
            <h3>Employees Messages Edit </h3>
            <br>
            <form method= post action="{{'UserController@update','$id'}}" >
            @csrf
                <input type="hidden" name="_method" value="PATCH"/>
                <div>
                    <input type="text" name="fullname" class="form-control" value="{{$employee->fullname}}"
                    placeholder="Enter Full Name"/>
                </div>
                <div>
                    <input type="text" name="email" class="form-control" value="{{$employee->email}}"
                    placeholder="Enter Email"/>
                </div>
                <div>
                    <input type="int" name="mobile" class="form-control" value="{{$employee->email}}"
                    placeholder="Enter Mobile No"/>
                </div>
                <div>
                    <input type="text" name="message" class="form-control" value="{{$employee->message}}"
                    placeholder="Enter Message"/>
                </div>
                <div class="form-group">
                    <input type= "submit" class="btn btn-primary" value="Edit" />                  
               </div>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>