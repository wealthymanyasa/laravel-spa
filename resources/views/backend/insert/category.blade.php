@extends('backend.master')
@section('content')
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Categories</a>
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
<section class="row container">
    <div class="content col-sm-6">
     
        <!--form to update the categories -->
        <form action="{{ url('addCategory') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="tbl" value="{{ encrypt('categories') }}">
          <!--title of the category-->
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
                   <!--on or off category status-->
            <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control">
                    <!--on or off status of the category-->
                    <option value="On" selected>on</option>
                    <option value="Off">off</option>
                </select>
            </div>
            <!--submit category btn-->
            <div class="form-group">
                <button class="btn btn-success">Add Category</button>
            </div>
        </form>
    </div>
   <!--section to view the categories //-->
   <div class="col-sm-6 table-responsive">
       <p  style="text-align: center" ><strong>View All Categories</strong></p>
       <table class="table table-striped table-hover table-bordered">
           <thead >
               <tr >
                   <th>SN</th>
                   <th>Title</th>
                   <th>Status</th>
                   <th>Action</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($data as $key=>$category)
               <tr>
                <td>{{++$key}}</td>
                <td>{{$category->title}}</td>
                <td>{{$category->status}}</td>
                <td>
                    <a href="{{url('editCategory')}}/{{$category->cid}}" class="btn btn-sm btn-success">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{url('deleteCategory')}}/{{$category->cid}}" class="btn btn-sm btn-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                   
                </td>
               </tr>
               @endforeach
              
           </tbody>
       </table>
   </div>
</section>
   
@endsection
