<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8">

  <?php if(!empty($title) || isset($titulo)){?>
  <title>Jacuzzis | <?php echo $title;?></title>
  <?php }else{?>
    <title>Jacuzzis | Inicio</title>
  <?php }?>

  <link rel="icon" type="image/png" href="{{ asset('dist/img/ico.ico') }}" />

  <!-- Tell the browser to be responsive to screen width -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bbootstrap 4 -->

  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

  <!-- iCheck -->

  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

  <!-- JQVMap -->

  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">

  <!-- Theme style -->

  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <!-- overlayScrollbars -->

  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">

  <!-- summernote -->

  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">

  <!-- Google Font: Source Sans Pro -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables -->

  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

  <!-- Iconos -->

  <link rel=”stylesheet” href="{{ asset('dist/css/fontawesome/css/all.css') }}">

  <!-- Toastr -->

  <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">

  <!-- Sweet Alerts -->

  <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">



  <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}">

<!-- jQuery -->

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->

<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ChartJS -->

<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<!-- Sparkline -->

<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>

<!-- JQVMap -->

<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>

<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<!-- jQuery Knob Chart -->

<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- daterangepicker -->

<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>

<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->

<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Summernote -->

<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- overlayScrollbars -->

<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

<!-- AdminLTE for demo purposes -->

<script src="{{ asset('dist/js/demo.js') }}"></script>

<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>

<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<!-- AdminLTE toastr -->

<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

<!-- AdminLTE Sweet alert -->

<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- jquery-validation -->

<script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<script src="{{ asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>

<!-- AdminLTE App -->

<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">



  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-dark navbar-danger">

  <!-- Left navbar links -->

  <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>

      </li>

    </ul>

  <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">

        <a class="nav-link" data-widget="control-sidebar" data-slide="true">

        </a>

      </li>

    </ul>

  </nav>

  <!-- /.navbar -->



  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="{{url('/home')}}" class="brand-link navbar-danger">
           <img  class="logoempresa" style="height: 50px !important;" src="{{ asset('dist/img/empresa/logo_empresa_int.png') }}" width="200">
    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">

          <a href="{{url('/home')}}" class="d-block"> </a>

        </div>

      </div>



      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview">

            <a href="#" class="nav-link">

            <i class="fas fa-tools"></i>

              <p>

                Parametrización

                <i class="fas fa-angle-left right"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="{{url('usuarios')}}" class="nav-link">

                <strong>U</strong>

                  <p>Usuarios</p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-item">

          <a class="nav-link" href=""

              onclick="event.preventDefault();

              document.getElementById('logout-form').submit();">

                <i class="fas fa-power-off"></i>

              <p>{{ __('Logout') }}</p>

          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

              @csrf

          </form>

          </li>

        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    @yield('content')

  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">

  </footer>



  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

  </aside>

  <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->





<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>





<script>

  $(function () {

    oTable = $(".datamerican").DataTable({
        "paging": true,

        "ordering": false,

        "language": {

          "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"

        },

        dom: 'Bfrtip',

        buttons: [

            'copy', 'csv', 'excel', 'pdf', 'print'

        ]

    });

    oTable.fnSort( [ [0,'desc'] ] ); // Sort by first column descending

    $('#example2').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": false,

      "ordering": true,

      "info": true,

      "autoWidth": false,

    });

    const Toast = Swal.mixin({

      toast: true,

      position: 'top-end',

      showConfirmButton: false,

      preventDuplicates: true,

      timer: 3000

    });

    $.validator.setDefaults({

    submitHandler: function () {

      alert( "Form successful submitted!" );

    }

  });

  });

</script>

<style>

.alignbuttons{

  float:right;

  margin-right: 1%;

}

.formstate {

  display:inline;

}

.navbar-danger {
    background-color: #065C72 !important;
}

.brand-link .navbar-danger {
  background-color: #065C72 !important;
}

</style>

</body>

</html>
