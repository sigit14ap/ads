  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('image/person-flat.png') }}" class="img-circle" alt="">
        </div>
        <div class="pull-left info">
          <p>{{ucwords(auth()->user()->name)}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ucwords(auth()->user()->role)}}</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{url('/test-management')}}">
            <i class="fa fa-book"></i> <span>Daftar Ujian</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/question-test-management')}}">
            <i class="fa fa-book"></i> <span>Manajemen Soal</span>
          </a>
        </li>
        <li>
          <a href="{{url('/test-management')}}">
            <i class="fa fa-check"></i> <span>Hasil Ujian</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/teacher-management')}}">
            <i class="fa fa-user-o"></i> <span>Manajemen Guru</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/student-management')}}">
            <i class="fa fa-user-o"></i> <span>Manajemen Siswa</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/subject-management')}}">
            <i class="fa fa-user-o"></i> <span>Manajemen Mata Pelajaran</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/class-management')}}">
            <i class="fa fa-user-o"></i> <span>Manajemen Kelas</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/landing-management')}}">
            <i class="fa fa-pencil-square-o"></i> <span>Manajemen Landing Page</span>
          </a>
        </li>
        <li>
          <a href="{{url('/credits')}}">
            <i class="fa fa-flag-o"></i> <span>Credits</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>