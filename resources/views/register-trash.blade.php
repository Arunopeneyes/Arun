<!doctype html>
<html lang="en">
  <head>
    <title>Customer-Trash</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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
                  <a class="nav-link disable " href="{{url('/register/view')}}">customer</a>
                </li>
              </ul>
            </div>
          </nav>
        <a href="/register">
        <button class="btn btn-outline-primary d-inline block m-2 float-right"> ADD</button>
        </a>
        <a href="/register/view">
            <button class="btn btn-outline-danger d-inline block m-2 float-right"> REGISTER VIEW</button>
            </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($register as $xyz) 
                <tr>
                    <td>{{$xyz->name}}</td>
                    <td>{{$xyz->email}}</td>
                    <td>{{$xyz->password}}</td>
                    <td>
                     <a href="{{route('register.forcedelete',['id'=>$xyz->id])}}"><button class="btn btn-outline-danger">DELETE</button></a>
                      <a href="{{route('register.restore',['id'=>$xyz->id])}}"><button class="btn btn-outline-success">RESTORE</button></a>
                    </td>
                </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>