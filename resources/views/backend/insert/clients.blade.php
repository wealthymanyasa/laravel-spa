@extends('backend.master')
@section('content')
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Add New Client</a>
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
<div class="row container">
         <div class="col-sm-6">

    <section class="content">
     
        <!--form to insert new clients-->
        <form action="{{ url('addClient') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="tbl" value="{{ encrypt('clients') }}">
          
         
               
            <div class="form-group">
                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                        style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;">Featured Image</label></p>
                <p><img id="output" width="200" /></p>
            </div>
            <div class="form-group">
                <label for="">Link</label>
                <input type="text" name="link" class="form-control">
            </div>
         
            <div class="form-group">
                <label >Status</label>
                    <select name="status" class="form-control">
                    <option value="on">on</option>
                    <option value="off">off</option>
                    </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Add Client</button>
            </div>
        </form>
        
    </section>
    
</div>

   <!--section to view the clients //-->
   <div class="col-sm-6">
   <div class="table-responsive">
    <p  style="text-align: center" ><strong>View All Clients</strong></p>
    <table class="table table-striped table-hover table-bordered">
        <thead >
            <tr >
                <th>SN</th>
                <th>Image</th>
                <th>Link</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($data) > 0)
            @foreach ($data as $key=>$client)
            <tr>
             <td>{{++$key}}</td>
             <td><img src="{{url('uploads/clients')}}/{{$client->image}}" width="50" alt=""></td>
             <td>{{$client->link}}</td>
             <td>{{$client->status}}</td>
             <td>
                 <a href="{{url('editclient')}}/{{$client->clid}}" class="btn btn-sm btn-success">
                     <i class="fa fa-edit"></i>
                 </a>
                 <a href="{{url('deleteclient')}}/{{$client->clid}}" class="btn btn-sm btn-danger">
                     <i class="fa fa-trash"></i>
                 </a>
                
             </td>
            </tr>
            @endforeach
           @else
           <tr  >
              <td class="alert alert-warning" colspan="5"> No Clients Found!!</td> 
           </tr>
           @endif
        </tbody>
    </table>
</div>
</section>
</div>

    <script>
        //javascript for displaying uploaded image in Html
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
      
    </script>
<style>
    .table{
        background: #D3D3D3;
        color: #fff;
    }
</style>
@endsection
