@extends('backend.master')
@section('content')

<div class="content-header">
    
    <div class="container-fluid">

        <nav class=" navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">All Services</a>
              </li>
        
            </ul>
        
        
        
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
              <!-- Messages Dropdown Menu -->
        
              <!-- Notifications Dropdown Menu -->
        
              <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                  <i class="fas fa-th-large"></i>
                </a>
              </li>
            </ul>
          </nav>    
     <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@if (Session::has('message'))
<div class="col-sm-6" >
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('message') }}
    </div>
</div>
@endif
    <div class="col-sm-12 table-responsive">
        <p style="text-align: center"><strong>View All Services</strong></p>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $service)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $service->title }}</td>
                       
                        <td>{{ $service->status }}</td>
                        <td>
                            <a href="{{ url('editService') }}/{{ $service->sid }}" class="btn btn-sm btn-success">
                                <i class="fa fa-edit"></i> 
                            </a>
                            <a href="{{ url('deleteService') }}/{{ $service->sid }}" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
