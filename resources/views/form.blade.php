<!doctype html>
<html lang="en">
  <head>
    <title>register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   {{-- <form action="{{$url}}" method="POST"> --}}
    {!! Form::open([
      'url' => ('/register'),
      'method' => 'POST',
    ]) !!}
        @csrf
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Employee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/register')}}">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/register/view')}}">View Data</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{url('/register/view')}}">customer</a>
                </li>
              </ul>
            </div>
          </nav>
        <h1 class="text-center">{{$title}}</h1>
       <x-input type="text" name="name" label="please Enter name"/>
       <x-input type="email" name="email" label="please Enter email"/>
       <x-input type="password" name="password" label="Please Enter password"/>
       <x-input type="password" name="confirm_password" label="please Enter Confirm Password"/>
          <button class="btn btn-primary">
                submit
          </button>
    </div>
   {{--</form> --}}
   {!!Form::close()!!}
</body>
</html>