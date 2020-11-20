@extends('layouts.Backend_layout')

@section('title', 'Venues list')
@section('css_content')
 
  <link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('backend/bower_components/font-awesome/css/font-awesome.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('backend/bower_components/Ionicons/css/ionicons.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('backend/dist/css/AdminLTE.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('backend/dist/css/skins/_all-skins.min.css') }}">
@endsection

@section('main_content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Venues<small>list</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Venues list</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage all venue-information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <div class="col-md-12">
                @if(Session::has('delete_venue_flash_success'))
                <div class="alert alert-danger alert-dismissible fade in"  id="myAlert">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>{!! session('delete_venue_flash_success') !!} !</strong>
                </div>
                @endif
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl no.</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Sub-title</th>
                  <th>Location</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $sl=1; ?>
                @foreach($venue as $venue)
                <tr>
                  <td>{{$sl}}</td>
                  <td>{{$venue->category_name}}</td>
                  <td>{{$venue->title}}</td>
                  <td>{{$venue->sub_title}}</td>
                  <td>{{$venue->location}}</td>
                  <td>{!! $venue->description !!}</td>
                  <td>@if(!empty($venue->image))<img height="50" src="../images/venues_img/{{$venue->image}}">@endif </td>

                  <td><a class="btn btn-primary btn-sm" href="{{ url('/admin/edit-venue',$venue->id) }}"><i class="fa fa-edit"></i></a>||<a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this post?')" href="{{ url('/admin/delete-venue',$venue->id) }}"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php $sl++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Sl no.</th>
                  <th>Title</th>
                  <th>Sub-title</th>
                  <th>Location</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  
</div>

    
@endsection
@section('js_content')

<script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('backend/bower_components/fastclick/lib/fastclick.js') }}"></script>

<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('backend/dist/js/demo.js') }}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection