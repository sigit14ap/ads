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
          <h3 class="box-title">Manajemen Kelas</h3>

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
            <div class="box-header">
              <h3 class="box-title">Manajemen Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            {{-- <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                    @if(auth()->user()->role == 'admin')
                        <th><center><i class="glyphicon glyphicon-cog"></i></center></th>
                    @endif
                        <th>Nama Kelas</th>
                        <th>Keterangan</th>
                    </tr> 
                    </thead>
                    <tbody>
                        @foreach($classs as $class)
                        <tr>
                    @if(auth()->user()->role == 'admin')
                        <td align="center">
                            <form action="{{ url('admin/class-management/'.$class->id) }}" method="POST">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <a href="{{ url('/admin/class-management/'.$class->id.'/edit') }}" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
                                {{-- <a href="{{ url('/admin/class-management/'.$class->id) }}"class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                                {{-- <button type="submit" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </button>
                            </form>
                        </td>
                    @endif
                        <td>{{ $class->name }}</td>
                        <td>
                            <a href="{{ url('/admin/class-management/'.$class->id.'/edit') }}" class="btn btn-default"><i class="glyphicon glyphicon-eye"></i> Lihat Siswa</a>
                        </td>
                        </tr>
                        @endforeach
                </tr>
              </table>
            </div> --}} 
            <!-- /.box-body -->
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


@endsection