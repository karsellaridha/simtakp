
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SISTEM INFORMASI KP DAN TA FASILKOM UNSR</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    {!! Html::style("asset/bootstrap/css/bootstrap.min.css") !!}
    <!-- Font Awesome Icons -->
    {!! Html::style("css/ionicons.min.css") !!}
    <!-- Ionicons -->
     {!! Html::style("css/font-awesome.min.css") !!}
    <!-- DATA TABLES -->
    {!! Html::style("asset/plugins/datatables/dataTables.bootstrap.css") !!}
    <!-- Theme style -->
    {!! Html::style("asset/dist/css/AdminLTE.min.css") !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
         {!! Html::style("asset/dist/css/skins/_all-skins.min.css") !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<style type="text/css">

.white{
  background:#fff;
}

.skin-blue .sidebar li a {
color: #000;
}

.skin-blue .sidebar li a:hover {
color: #c0c0c0;
}

.skin-blue .treeview-menu>li.active>a, .skin-blue .treeview-menu>li>a:hover {
color: #000;
}

</style>

  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="{{url('simtakp')}}" class="logo"><img src = {!! url("unsri.png") !!} width = "60"><b>SIMTAKP</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Welcome, 
                    @if(Auth::user()->role=='dosen' OR Auth::user()->role=='mahasiswa')
                    {!! 
                    (Auth::user()->role=='dosen' AND isset(Auth::user()->role)) ? Auth::user()->dosen->nama." - " : Auth::user()->mahasiswa->nama." - "
                    !!}
                    @endif

                {!! @Auth::user()->username !!} </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
          
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Ubah Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{url('auth/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
     
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>

<!-- menu Dosen -->
@if(Auth::user()->role=="dosen")
              <li>

                  <a style='color:#fff' href="{!! url('mhsdibimbingkp') !!}"><i class="fa fa-dashboard"></i> Membimbing KP</a>
              </li>
              <li>
                  <a style='color:#fff' href="{!! url('mhsdibimbingta')!!} "><i class="fa fa-dashboard"></i> Membimbing TA</a>
              </li>
              <li>
                  <a  style='color:#fff' href="{!! url('mhsdiujita') !!}"><i class="fa fa-dashboard"></i> Menguji TA</a>
              </li>
@endif


@if(Auth::user()->role=="mahasiswa")

<li class='treeview'>
<a href="#" style='color:#fff'>
  <i class="fa fa-dashboard"></i> Kerja Praktik
  <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
  <li class='white'>
  <a href="{{ url('pengajuanpembkp') }}">
    <i class="fa fa-circle-o"></i> Pengajuan Pembimbing KP
  </a>
</li>
  <li class='white'>
  <a href="{{ url('pengajuansyaratkp') }}">
    <i class="fa fa-circle-o"></i> Pengajuan Syarat KP
  </a>
</li>
<li class='white'>
  <a href="{{ url('bimbingankp') }}">
    <i class="fa fa-circle-o"></i> Progress Bimbingan KP
  </a>
</li>
<li class='white'>
  <a href="{{ url('inputnilaikpmhs') }}">
    <i class="fa fa-circle-o"></i> Penilaian KP
  </a>
</li>
</ul>
</li>


<!-- TUGAS AKHIR /////////////////////////////////////-->


<li class='treeview'>
<a href="#" style='color:#fff'>
  <i class="fa fa-dashboard"></i> Tugas Akhir
  <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
 <li class='white'>
  <a href="{{ url('pengajuanpembta') }}">
    <i class="fa fa-circle-o"></i> Pengajuan Pembimbing TA
  </a>
</li>
<li class='white'>
  <a href="{{ url('pengajuansyaratta') }}">
    <i class="fa fa-circle-o"></i> Pengajuan Syarat TA
  </a>
</li>
<li class='white'>
  <a href="{!! url('bimbinganta') !!}"><i class="fa fa-circle-o">
  </i> Input Progress Bimbingan TA</a>
</li>
<li class='white'>
  <a href="{!! url('ujian_ta') !!}">
    <i class="fa fa-circle-o"></i> 
    Pengajuan Syarat Ujian </a>
  </li> 
</ul>
</li>

@endif

@if(Auth::user()->role=="admin")
<li class='treeview'>
<a href="#" style='color:#fff'>
  <i class="fa fa-dashboard"></i> Kerja Praktik
  <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
  <li class='white'>
  <a href="{!! url('verifikasisyaratkp') !!}"><i class="fa fa-circle-o"></i> Verifikasi Syarat KP </a>
  </li>
</ul>
</li>

<li class='treeview'>
<a href="#" style='color:#fff'>
  <i class="fa fa-dashboard"></i> Tugas Akhir
  <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
      <li class='white'>
    <a href="{!! url('verifikasisyaratta') !!}"><i class="fa fa-circle-o"></i> Verifikasi Syarat TA </a>
    </li>
    <li class='white treeview'>
     <a href="#">
        <i class="fa fa-circle-o"></i> Verifikasi Syarat Ujian TA
       <i class="fa fa-angle-left pull-right"></i>
       </a>
      <ul class="treeview-menu">
          <li>
            <a href="{!! url('verifikasi_ujian/ta1')!!}"><i class="fa fa-minus">
          </i> Verifikasi Syarat Ujian TA 1</a>
          </li>
          <li>
            <a href="{!! url('verifikasi_ujian/ta2')!!}"><i class="fa fa-minus">
          </i> Verifikasi Syarat Ujian TA 2</a>
          </li>
      
  </ul>
 </li>
</ul>
</li>

<li><a href="{{ url('kuotabimbingan') }}" style='color:white'><i class="fa fa-dashboard"></i>Kuota Bimbingan</a></li>


 <li class="treeview">
              <a href="#" style='color:#fff'>
                <i class="fa fa-table"></i> <span>Data Master</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class='white'><a href="{{ url('mahasiswa') }}"><i class="fa fa-circle-o"></i>Data Mahasiswa</a></li>
                <li class='white'><a href="{{ url('dosen') }}"><i class="fa fa-circle-o"></i>Data Dosen</a></li>
              </ul>
      </li>


@endif

@if(Auth::user()->role == "ketua jurusan")

  <li>
  <a href="{{ url('susunpembkp') }}" style='color:#fff'>
    <i class="fa fa-dashboard"></i> Susun Pembimbing KP 
  </a>
  </li>

  <li>
  <a href="{{ url('mhsdibimbingkp') }}" style='color:#fff'>

    <i class="fa fa-dashboard"></i> Lihat Progress Bimbingan KP 
  </a>
  </li>

 <li>
  <a href="{{ url('susunpembta') }}" style='color:#fff'>

    <i class="fa fa-dashboard"></i> Susun Pembimbing TA 
  </a>
</li>

 <li>
 <a href="{{ url('mhsdibimbingta') }}" style='color:#fff'>

  <i class="fa fa-dashboard"></i> Progress Bimbingan TA 
</a>
</li>

 <li>
 <a href="{{ url('susunjadwalta') }}" style='color:#fff'>

  <i class="fa fa-dashboard"></i> Susun Jadwal Ujian TA 
</a>
</li>

 <li>
  <a href="{{ url('kuotabimbingan') }}" style='color:#fff'>

    <i class="fa fa-dashboard"></i> Kuota Bimbingan
  </a>
</li>

@endif

    </section>
        <!-- /.sidebar -->
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              @yield('content')


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://si.ilkom.unsri.ac.id">Jurusan Sistem Informasi Fasilkom Unsri</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  loading...
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>
  

    <!-- jQuery 2.1.3 -->
    {!! Html::script("asset/plugins/jQuery/jQuery-2.1.3.min.js") !!}
    <!-- Bootstrap 3.3.2 JS -->
    {!! Html::script("asset/bootstrap/js/bootstrap.min.js") !!}
    <!-- DATA TABES SCRIPT -->
    {!! Html::script("asset/plugins/datatables/jquery.dataTables.js") !!}
    {!! Html::script("asset/plugins/datatables/dataTables.bootstrap.js") !!}
    <!-- SlimScroll -->
    {!! Html::script("asset/plugins/slimScroll/jquery.slimscroll.min.js") !!}
    
    <!-- FastClick -->
    {!! Html::script("asset/plugins/fastclick/fastclick.min.js") !!}
    <!-- AdminLTE App -->
    {!! Html::script("asset/dist/js/app.min.js") !!}
    <!-- AdminLTE for demo purposes -->
    {!! Html::script("asset/dist/js/demo.js") !!}
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $('#datatable').dataTable({
           "pageLength": 5
        });


       
          $(document.body).on('hidden.bs.modal', function ()
          {
            $('#myModal .modal-content').html("<div class='modal-body'>"+"loading"+"</div>");
            $('#myModal').removeData('bs.modal');
          });


      


      });
    </script>

    @yield('js');

    </body>
</html>
