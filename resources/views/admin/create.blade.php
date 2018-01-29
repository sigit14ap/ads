@extends('layouts.app')
@section('main-content')
@section('title', 'Tambah Soal')
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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Soal</h3>

          <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
        </div>
        <form role="form" action="{{ route('admin.store') }}" method="POST">
          {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Soal</label>
                  <input type="number" name="no_soal" class="form-control" placeholder="Nomor Soal">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pertanyaan</label>
                  <textarea class="form-control" rows="3" name="pertanyaan" placeholder="Pertanyaan ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilihan 1</label>
                  <input type="text" name="pilihan_1" class="form-control" placeholder="Isi Pilihan 1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilihan 2</label>
                  <input type="text" name="pilihan_2" class="form-control" placeholder="Isi Pilihan 2">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilihan 3</label>
                  <input type="text" name="pilihan_3" class="form-control" placeholder="Isi Pilihan 3">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilihan 4</label>
                  <input type="text" name="pilihan_4" class="form-control" placeholder="Isi Pilihan 4">
                </div>
                <div class="form-group">
                  <label>Dimensi</label>
                  <select name="dimensi" class="form-control select2" style="width: 100%;">
                    <option value="ro">RO</option>
                    <option value="as">AS</option>
                    <option value="rd">RD</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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