<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('admin') }}" class="brand-link">
                <img src="http://obertmanyasa.herokuapp.com/images/obert.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="http://obertmanyasa.herokuapp.com/images/obert.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Obert Manyasa</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Home and About Us
                                    <i class="fas fa-angle-left right"></i>
                                  
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('all-posts')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>All Home and About Us Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('new-post')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>Add New Home or About Us</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                       <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                               Services
                                <i class="fas fa-angle-left right"></i>
                              
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('all-services')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-success"></i>
                                    <p>All Services</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('new-service')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-success"></i>
                                    <p>Add New Service</p>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                               Portfolios
                                <i class="fas fa-angle-left right"></i>
                              
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('all-portfolio')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-success"></i>
                                    <p>All Portfolios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('new-portfolio')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-success"></i>
                                    <p>Add New Portfolio</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('portcats')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-success"></i>
                                    <p>Portfolio Categories</p>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                        <li class="nav-item">
                            <a href="{{ url('categories') }}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('clients') }}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Clients</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('setups') }}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Website Settings</p>
                            </a>
                        </li>
                    </ul>  
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Update Post</a>
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
        <form action="{{ url('updatePost') }}/{{$data->conid}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="tbl" value="{{ encrypt('contents') }}">
            <input type="hidden" name="conid" value="{{$data->conid}}">
          
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label>Description</label>
                 <textarea name="description" rows="10" class="form-control">
                    {{$data->title}}
                 </textarea>
            </div>     
            <div class="form-group">
                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                        style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;">Featured Image</label></p>
               
                @if($data->image)
                <p><img id="output" src="{{$data->image}}" /></p>
                @else
                <p><img id="output" width="200" /></p>
                @endif
            </div>
            <div class="form-group">
                <label >Category</label>
                    <select name="category" class="form-control">
                        <option>{{$data->category}}</option>
                        @foreach ($cats as $cat)
                        @if($cat->title != $data->category)
                        <option >{{$cat->title}}</option>
                        @endif
                        @endforeach
                        <option >home</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="">Button Link</label>
                <input type="text" class="form-control" name="link" value="{{$data->link}}">
            </div>
            <div class="form-group">
                <label >Status</label>
                    <select name="status" class="form-control">
                        <option >{{$data->status}}</option>
                        @if($data->status == 'off')
                        <option>On</option>
                        @else
                        <option>off</option>
                        @endif
                    </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update Post</button>
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
<script src="//cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
  <script>
      //calling the ckeditor
      CKEDITOR.replace('description', {});
  </script>
  

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">

    <div class="float-right d-none d-sm-inline-block">

    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>

</html>