@extends('layouts.app')
@section('main-content')
@section('title', 'Home')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Soal
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
       @if(Session::has('error_msg'))
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>{{ Session::get('error_msg') }}</strong>
        </div>
        @endif

        @if(Session::has('success_msg'))
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>{{ Session::get('success_msg') }}</strong>
        </div>
        @endif
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Kelola Soal</h3>

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
                    <a href="{{ route('admin.create') }}" class="btn btn-sm btn-primary btn-create">Tambah Soal</a>
            </div><hr>
                <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kelola Soal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                        <th>Nomor Soal</th>
                        <th>Pertanyaan</th>
                        <th>Pilihan 1</th>
                        <th>Pilihan 2</th>
                        <th>Pilihan 3</th>
                        <th>Pilihan 4</th>
                        <th>Dimensi</th>
                        <th><center><i class="glyphicon glyphicon-cog"></i></center></th>
                    </tr> 
                    </thead>
                    <tbody>
                        @foreach($soal as $x)
                        <tr>
                        <td>{{ $x->no_soal }}</td>
                        <td>{{ $x->pertanyaan }}</td>
                        <td>{{ $x->pilihan_1 }}</td>
                        <td>{{ $x->pilihan_2 }}</td>
                        <td>{{ $x->pilihan_3 }}</td>
                        <td>{{ $x->pilihan_4 }}</td>
                        <td>{{ $x->dimensi }}</td>
                        <td align="center">
                          <button class="btn btn-block btn-success" data-toggle="modal" data-target="#myModal{!! $x->id!!}"><i class="glyphicon glyphicon-edit"></span></i></button>
                                  <!-- Modal -->
                                    <div class="modal fade" id="myModal{!! $x->id!!}" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Ubah</h4>
                                            </div>
                                            <form method="post" action="{{ route('admin.update',$x->id) }}">
                                                {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Nomor Soal</label>
                                                  <input type="number" value="{{$x->no_soal}}" name="no_soal_edit" class="form-control" placeholder="Nomor Soal">
                                                </div>
                                                <div class="form-group">
                                                  <label for="pertanyaan">Pertanyaan</label>
                                                  <textarea class="form-control" rows="3" name="pertanyaan_edit" placeholder="Pertanyaan ...">{{$x->pertanyaan}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                  <label for="pilihan1">Pilihan 1</label>
                                                  <input type="text" value="{{$x->pilihan_1}}" name="pilihan_1_edit" class="form-control" placeholder="Isi Pilihan 1">
                                                </div>
                                                <div class="form-group">
                                                  <label for="pilihan2">Pilihan 2</label>
                                                  <input type="text" name="pilihan_2_edit" value="{{$x->pilihan_2}}" class="form-control" placeholder="Isi Pilihan 2">
                                                </div>
                                                <div class="form-group">
                                                  <label for="pilihan3">Pilihan 3</label>
                                                  <input type="text" value="{{$x->pilihan_3}}" name="pilihan_3_edit" class="form-control" placeholder="Isi Pilihan 3">
                                                </div>
                                                <div class="form-group">
                                                  <label for="pilihan4">Pilihan 4</label>
                                                  <input type="text" name="pilihan_4_edit" class="form-control" value="{{$x->pilihan_4}}" placeholder="Isi Pilihan 4">
                                                </div>
                                                <div class="form-group">
                                                  <label>Dimensi</label>
                                                  <select name="dimensi_edit" class="form-control select2" style="width: 100%;">
                                                    <option value="ro" @if($x->dimensi == "ro")
                                                    selected
                                                    @endif>
                                                    RO</option>
                                                    <option value="as"
                                                     @if($x->dimensi == "as")
                                                    selected
                                                    @endif>
                                                    AS</option>
                                                    <option value="rd" 
                                                    @if($x->dimensi == "rd")
                                                    selected
                                                    @endif>
                                                    RD</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Simpan</button></a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </form>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    <!-- END Modal -->
                            <form id="delete-form-{{ $x->id }}" method="post" action="{{ route('admin.destroy',$x->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                </form>
                                 <button class="btn btn-danger btn-block btn-md" data-toggle="modal" data-target="#myModalDelete{!! $x->id!!}"><i class="glyphicon glyphicon-remove-sign"></span></i></button>
                                  <!-- Modal -->
                                    <div class="modal fade" id="myModalDelete{!! $x->id!!}" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Hapus</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p>Anda yakin ingin menghapus ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="" onclick="event.preventDefault();document.getElementById('delete-form-{{ $x->id }}').submit();"><button type="submit" class="btn btn-danger">Hapus</button></a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    <!-- END Modal -->
                        </td>
                        </tr>
                        @endforeach
                </tr>
              </table>
            </div>
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