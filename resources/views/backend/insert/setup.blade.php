@extends('backend.master')
@section('content')
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Website Settings</a>
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

@if($data == '')
    <section class="content col-sm-6">
     
        <!--form to update the contact us section-->
        <form action="{{ url('addSettings') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="tbl" value="{{ encrypt('setups') }}">
            <div class="form-group">
                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                        style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                <p><img id="output" width="200" /></p>
            </div>
            <div class="form-group">
                <label for="">Site Title</label>
                <input type="text" name="metatitle" class="form-control">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="contact" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <!-- <div class="form-group">
                                                                                                    <label>Social Profile Links</label>
                                                                                                </div>
                                                                                                <div id="socialGroup">
                                                                                                    <div class="form-group socialField">
                                                                                                        <input type="text" name="social[]" class="form-control ">
                                                                                                        <a href="#" class="btn btn-warning addField"><i class="fa fa-plus "></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            -->










            <div class="form-group">
                <button class="btn btn-success">Update</button>
            </div>
        </form>
    </section>
    @else
   
    <section class="content col-sm-6">
     
        <!--form to update the contact us section-->
        <form action="{{ url('addSettings') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="tbl" value="{{ encrypt('setups') }}">
            <div class="form-group">
                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                        style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                <p><img id="output" src="{{url('uploads/setups')}}/{{$data->image}}" /></p>
            </div>
            <div class="form-group">
                <label for="">Site Title</label>
                <input type="text" name="metatitle" value="{{$data->metatitle}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" value="{{$data->address}}"  class="form-control">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="contact" value="{{$data->contact}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{$data->email}}" class="form-control">
            </div>
            <!-- <div class="form-group">
                                                                                                    <label>Social Profile Links</label>
                                                                                                </div>
                                                                                                <div id="socialGroup">
                                                                                                    <div class="form-group socialField">
                                                                                                        <input type="text" name="social[]" class="form-control ">
                                                                                                        <a href="#" class="btn btn-warning addField"><i class="fa fa-plus "></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            -->










            <div class="form-group">
                <button class="btn btn-success">Update</button>
            </div>
        </form>
    </section>
    @endif
    <script>
        //javascript for displaying uploaded image in Html
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        /*add filed on click of the plus icon to add additional social links
        $('.addField').click(function() {
            var newField = $(document.createElement('div')).attr('class', 'form-group');
            newField.after().html(
                ' <label>Social Profile Links</label><input type="text" name="social[]" class="form-control "></div>'
            )
        });
        newField.appendTo('#socialGroup');
        */
    </script>
    <!--css styles to style the social input field and the addfield plus icon-->
    <style>
        /*css class to style the social input field 
                                                                                                    .socialField {
                                                                                                        position: relative;
                                                                                                    }

                                                                                                    css class to style the addfield plus icon
                                                                                                        .addField {
                                                                                                            position: absolute;
                                                                                                            top: 0;
                                                                                                            right: 0;
                                                                                                        }
                                                                                                        */

    </style>

@endsection
