@extends('backend.master')
@section('content')
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Add New Portfolio</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('admin') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>

        </ul>
    </nav>
    @if (Session::has('message'))
    <div class="col-sm-6" >
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}
        </div>
    </div>
@endif


    <section class="content col-sm-6">
     
        <!--form to update the contact us section-->
        <form action="{{ url('addPortfolio') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="tbl" value="{{ encrypt('portfolios') }}">
          
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
               
            <div class="form-group">
                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                        style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;">Featured Image</label></p>
                <p><img id="output" width="200" /></p>
            </div>
            <div class="form-group">
                <label>Category</label>
                    <select name="category" class="form-control">
                        @foreach ($cats as $cat)
                        <option >{{$cat->title}}</option>
                        @endforeach
                    </select>
            </div>
         
            <div class="form-group">
                <label >Status</label>
                    <select name="status" class="form-control">
                    <option value="on">on</option>
                    <option value="off">off</option>
                    </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Add Portfolio</button>
            </div>
        </form>
    </section>
  
    <script>
        //javascript for displaying uploaded image in Html
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
      
    </script>
<!--//referencing the ckeditor cdn--->

@endsection
