<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Messages')
</head>
<body>
    @extends('includes.header')

    @section('content')
    <div class="row">
        <div  class="col-md-12">
            <br>
            <h3 align="center">Employees Messages </h3>
            <br>
            <table class= "table table-bordered">
            <tr>
                <th>Full Name</th>  
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($employees as $row)
            <tr>
                <td>{{$row['fullname']}}</td>
                <td>{{$row['email']}}</td>
                <td>{{$row['mobile']}}</td>
                <td>{{$row['message']}}</td>
                <td><a href="{{action('UserController@edit', $row ['id'])}}">Edit</a></td>
                <td><a href="{{action('UserController@index', $row ['id'])}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>
    @endsection
</body>
</html>