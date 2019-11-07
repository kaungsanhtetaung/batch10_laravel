@extends('template')

@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Category Create Form</h1>
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
      <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputPassword1">Name:</label>
            <input type="text" class="form-control"  placeholder="Name" name="category">
          </div>
          
          
            <div class="form-group">
           <input type="submit" class="btn btn-primary" name="btnsubmit" value="Save">
           </div>
      </form>
      </div>
    </div>
  </div>
  @endsection