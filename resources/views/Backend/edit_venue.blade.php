@extends('layouts.Backend_layout')

@section('title', 'Edit Venue')
@section('css_content')
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/morris.js/morris.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/jvectormap/jquery-jvectormap.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection

@section('main_content')

<div class="content-wrapper">
  
  <section class="content-header">
    <h1>
      Edit Venues Post
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit Venue</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit
                <small>Venue as need</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            
            <div class="box-body pad">
              <div class="col-md-12">
                @if(Session::has('upadte_venue_flash_success'))
                <div class="alert alert-success alert-dismissible fade in"  id="myAlert">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>{!! session('upadte_venue_flash_success') !!} !</strong>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" id="myAlert">
                  <a href="" class="close">&times;</a>
                  <ul>
                  @foreach ($errors->all() as $error)
                    <li>
                    <strong>Oh sanp!</strong> {{ $error }}
                    </li>
                  @endforeach
                  </ul>
                </div>
                @endif
              </div>
              <form method="POST" action="{{ url('/admin/edit-venue',$venue->id) }}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                 
                 <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="category_name" id="title" placeholder="Title" value="{{$venue->category_name}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$venue->title}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>Sub-title</label>
                        <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Sub-title" value="{{$venue->sub_title}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="{{$venue->location}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" maxlength="12" class="form-control" name="contact" id="contact-info" placeholder="contact-info" value="{{$venue->contact}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" id="Mail-info" placeholder="Mail-info" value="{{$venue->email}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group">
                        <label>Image (Max file size:2024 kb, Max_width=370,max_height=300)</label>
                        <input type="file" class="form-control-file" name="image" id="image" value="{{$venue->image}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-9">
                    <div class="form-group">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="textarea" name="description" id="description" placeholder="Description here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$venue->description}}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="submit" name="venue_post" class="btn btn-primary btn-lg" value="Update">
                
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
  <!-- /.content -->
</div>

    
@endsection
@section('js_content')
    <!-- jQuery 3 -->
    <script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('backend/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="{{asset('backend/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/morris.js/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('backend/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('backend/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend/dist/js/demo.js')}}"></script>

@endsection