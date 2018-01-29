@extends('layouts.app')
@section('main-content')
@section('title', 'Home')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Kelas
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ADS</h3>

          <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
        </div>
        <div class="box-body">
            <div class="col col-xs-7">
                    {{-- @if(auth()->user()->role == 'admin')
                    <a href="{{action('Admin\KelasController@create')}}" class="btn btn-sm btn-primary btn-create">Tambah Kelas</a>
                    @endif --}}
            </div><hr>
                <div class="row">
        <div class="col-xs-12">
          <div class="box">
              @for($i=1;$i<=60;$i++)

              <div class="form-group">
                <label>
                  {{$i}}.&nbsp;&nbsp;&nbsp;
                </label>
                <label>
                  <input type="radio" name="jawaban_{{$i}}" class="flat-red" checked>
                  A
                </label>&nbsp;&nbsp;&nbsp;
                <label>
                  <input type="radio" name="jawaban_{{$i}}" class="flat-red">
                  B
                </label>&nbsp;&nbsp;&nbsp;
                <label>
                  <input type="radio" name="jawaban_{{$i}}" class="flat-red">
                  C
                </label>&nbsp;&nbsp;&nbsp;
                <label>
                  <input type="radio" name="jawaban_{{$i}}" class="flat-red">
                  D
                </label>&nbsp;&nbsp;&nbsp;

              </div>
              @endfor
              <hr>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          {{-- <center>{!! $classs->links() !!}</center> --}}
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script type="text/javascript"> //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
</script>

@endsection