@extends('layouts.main')
@push('title')
    <title>Home</title>
@endpush
@section('main-section')
<section class="header4 cid-seN6mrWfXp mbr-fullscreen" id="header4-2" data-sortbtn="btn-primary">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-8">
                <div class="text-wrapper">
                    
                    <h1 class="mbr-section-title mbr-fonts-style align-center mbr-white display-1"><strong>Growth Strategy<br></strong><font color="#f23801"><strong>Customized Perfection</strong></font></h1>
                    <p class="mbr-section-subtitle mbr-fonts-style align-center mbr-white display-5"><em>Let's deliver the right solution for your business.</em><br></p>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

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
</div>