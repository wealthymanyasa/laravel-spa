@extends('backend.master')
@section('content')
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Add New Service</a>
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


    <section class="content col-sm-12">
     
        <!--form to update the contact us section-->
        <form method="post" action="{{ url('addService') }}">
            {{ csrf_field() }}
            <input type="hidden" name="tbl" value="{{ encrypt('services') }}">
          
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                 <textarea name="description" rows="10" class="form-control"></textarea>
            </div>     
           
            <div class="form-group">
                <label for="">Icon</label>
                <input type="text" class="form-control" name="icon">
            </div>
            <div class="form-group">
                <label >Status</label>
                    <select name="status" class="form-control">
                    <option value="on">on</option>
                    <option value="off">off</option>
                    </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Add Service</button>
            </div>
        </form>
    </section>
  
    
<!--//referencing the ckeditor cdn--->
<script src="//cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
  <script>
      //calling the ckeditor
      CKEDITOR.replace('description', {});
  </script>
  
@endsection
