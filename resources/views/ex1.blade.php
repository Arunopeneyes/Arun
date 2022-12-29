<!doctype html>
<html lang="en">
  <head>
    <title>ex1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   {{-- <form action="/ex1" method="POST"> --}} 
          {!! Form::open([
            'url' => ('/ex1'),
            'method' => 'POST'
          ]) !!} 
        <div class="container">
            <div class="form-group">
         {{--    <label for="Name"></label>
              <input type="text"  name="Name" id="" placeholder="Enter Name"> --}}
              {!!Form::label('name', 'First Name') !!}
              {!!Form::text('name','',[
                'id' => "name", 'required' => "",'data-bv-field' => "name", 'placeholder' => "Enter Name"
              ]) !!}
            </div>
            <div class="form-group">
                {{--<label for="Email"></label>
                <input type="text" name="Email" id="" placeholder="Enter Email"> --}}

                {!!Form::label('email', 'Email') !!}
                {!!Form::text('email','',[
                  'id' => "email", 'required' => "", 'data-bv-field' => "email", 'placeholder' => "Enter Email"
                ]) !!}
              </div>
              <div class="form-group">
               {{-- <label for="Address"></label>
                <input type="text"name="Address" id=""  placeholder="Enter Adress"> --}}
                {!!Form::label('address', 'Address') !!}
                {!!Form::text('address','',[
                  'id' => "address", 'required' => "", 'data-bv-field' => "address", 'placeholder' => "Enter Address"
                ]) !!}
              </div>
              <div class="form-group">
                {!!Form::label('country', 'country') !!}
                {!!Form::select(
                  'country',[
                    "1"=>"India",
                    "2"=>"England",
                    "3"=>"USA"
                ],
                "1",
                [
                  'id'=>"name" , 'required' => "" , 'class' => 'form-control' , 'data-bv-field' => "name"
                ]
                ) !!}
              </div>
              <div >
                <input type="submit" value="Submit" />
              </div>
        </div>
        {!!Form::close()!!} 
</body>
</html>