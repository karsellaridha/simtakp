
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SISTEM INFORMASI KP DAN TA FASILKOM UNSR</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    {!! Html::style("asset/bootstrap/css/bootstrap.min.css") !!}
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
      <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
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
                  <span class="hidden-xs">Welcome, {!! @Auth::user()->username!!}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
          
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
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

            <li class="treeview">
              <a href="#">
            <i class="fa fa-dashboard"></i> <span> Kerja Praktik</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>

              <ul class="treeview-menu">
                <!-- sub menu-->
                @if(Auth::user()->role=="mahasiswa" or Auth::user()->role=="ketua jurusan")
              <li>
                  <a href=""><i class="fa fa-circle-o"></i> Dosen Pembimbing KP <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">

                    @if(Auth::user()->role=="mahasiswa")
                    <li><a href="{{ url('pengajuanpembkp') }}"><i class="fa fa-circle-o"></i> Pengajuan Pembimbing KP</a></li>
                    @endif

                    @if(Auth::user()->role=="ketua jurusan")
                    <li>
                      <a href="{{ url('susunpembkp') }}"><i class="fa fa-circle-o"></i> Susun Pembimbing KP </a></li>
                    @endif
              </ul>
              <!-- end sub menu-->
              @endif

              <!-- sub menu-->
               @if(Auth::user()->role=="dosen")
              <li>
                  <a href="mhsdibimbingkp"><i class="fa fa-circle-o"></i> Mahasiswa yang dibimbing</a>
              </li>
              @endif
              <!-- end menu-->

              <!-- sub menu-->
              @if(Auth::user()->role=="mahasiswa" or Auth::user()->role=="admin")
            <li>
                  <a href=""><i class="fa fa-circle-o"></i> Administrasi Syarat KP <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">

                    @if(Auth::user()->role=="mahasiswa")
                    <li><a href="pengajuansyaratkp"><i class="fa fa-circle-o"></i> Pengajuan Syarat KP</a></li>
                    @endif

                    @if(Auth::user()->role=="admin")
                    <li>
                      <a href="verifikasisyaratkp"><i class="fa fa-circle-o"></i> Verifikasi Syarat KP </a></li>
                    @endif
                   
                    </ul>
            </li>
            @endif
                <!-- end sub menu-->

                <!-- sub menu-->
                 @if(Auth::user()->role=="mahasiswa" or Auth::user()->role=="ketua jurusan")
            <li>
                  <a href=""><i class="fa fa-circle-o"></i> Progress Bimbingan KP <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">

                    @if(Auth::user()->role=="mahasiswa")
                    <li><a href="bimbingankp"><i class="fa fa-circle-o"></i> Input Progress Bimbingan KP</a></li>
                    @endif

                    @if(Auth::user()->role=="ketua jurusan")
                    <li>
                      <a href="bimbingankpks"><i class="fa fa-circle-o"></i> Lihat Progress Bimbingan KP </a></li>
                    @endif
                   
                    </ul>
            </li>
            @endif
                <!-- end sub menu-->

                <!-- sub menu-->
                @if(Auth::user()->role=="mahasiswa")
            <li>
                  <a href=""><i class="fa fa-circle-o"></i> Penilaian KP <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">

                    @if(Auth::user()->role=="mahasiswa")
                    <li><a href="#"><i class="fa fa-circle-o"></i> Input Penilaian KP</a></li>
                    @endif
                   
                    </ul>
            </li>
            @endif
                <!-- end sub menu-->

      @if(Auth::user()->role=="admin" or Auth::user()->role=="ketua jurusan")
      <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Kuota Bimbingan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('kuotabimbingan') }}"><i class="fa fa-circle-o"></i>Input Kuota Bimbingan</a></li>
                
              </ul>
            </li>
      @endif
           
      @if(Auth::user()->role=="admin")
      <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Data Master</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('mahasiswa') }}"><i class="fa fa-circle-o"></i>Data Mahasiswa</a></li>
                <li><a href="{{ url('dosen') }}"><i class="fa fa-circle-o"></i>Data Dosen</a></li>
              </ul>
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


        function refreshModal(Loading){
          $(document.body).on('hidden.bs.modal', function ()
          {
            $('.modal-content').html("<div class='modal-body'>"+loading+"</div>");
            $('#myModal').removedata('bs.modal');
          });
        }

        refreshModal("Loading..");


      });
    </script>

    @yield('js');

    </body>
</html>
