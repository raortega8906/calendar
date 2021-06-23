<!DOCTYPE html>

{{-- This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only. --}}

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Calendario</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="/adminlte/plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/fullcalendar-bootstrap/main.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" onload="habilitar();">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/calendar') }}" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/calendar') }}" class="brand-link">
      <img src="/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Páginas Principales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/calendar') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Horarios | Calendario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/record') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Horarios | Historial</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('/sum') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Suma Horas
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar  Evento</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/calendar') }}">Home</a></li>
              <li class="breadcrumb-item active">Editar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @include('admin.partials.session-flash-status-error')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="sticky-top mb-12">
              <div class="card">
                <div class="card-body bg bg-primary">
                  <!-- the events -->
                  <div id="external-events"></div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Evento</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('record.update', $event->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                          <label for="date">Fecha</label>
                          <input class="form-control" type="date" name="date" id="date" value="{{ old('title', $event->date) }}">
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="time_ini">Hora Entrada</label>
                          <input class="form-control" type="time" name="time_ini" id="time_ini" value="{{ old('title', $event->time_ini) }}">
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="time_end">Hora Salida</label>
                          <input class="form-control" type="time" name="time_end" id="time_end" value="{{ old('title', $event->time_end) }}">
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="status">Estado Evento</label>
                          <select class="form-control" name="status" id="status" onchange="habilitar();" value="{{ old('title', $event->status) }}">
                            <option {{ $event->status == 'Trabajo' ? 'selected="selected"' : '' }}>Trabajo</option>
                            <option {{ $event->status == 'Descanso' ? 'selected="selected"' : '' }}>Descanso</option>
                          </select>
                        </div>
                        <hr>
                        <input type="submit"
                            value="Actualizar"
                            class="btn btn-primary row-cols-lg-3">
                    </form>

                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">

                <!-- Google -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://www.google.es/"
                    role="button"
                    data-mdb-ripple-color="dark"
                ><i class="fab fa-google"></i
                    ></a>

                <!-- Instagram -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://www.instagram.com/camii.vazquezz_/"
                    role="button"
                    data-mdb-ripple-color="dark"
                ><i class="fab fa-instagram"></i
                    ></a>

                <!-- Facebook -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://www.facebook.com/camifrascarelli"
                    role="button"
                    data-mdb-ripple-color="dark"
                ><i class="fab fa-facebook"></i
                    ></a>

                <!-- Twitter -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://twitter.com/Camfrascarelli?s=09"
                    role="button"
                    data-mdb-ripple-color="dark"
                ><i class="fab fa-twitter"></i
                    ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © {{date('Y')}} Copyright:
            <a class="text-dark" href="https://rafaelortegaweb.herokuapp.com/">Rafael A. Ortega</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- ./footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="/adminlte/plugins/moment/moment.min.js"></script>
<script src="/adminlte/plugins/fullcalendar/main.min.js"></script>
<script src="/adminlte/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="/adminlte/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="/adminlte/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="/adminlte/plugins/fullcalendar-bootstrap/main.min.js"></script>

<script>
    function habilitar()
    {
        const val = document.getElementById("status").value;
        const ini = document.getElementById("time_ini");
        const end = document.getElementById("time_end");
        if(val == 'Trabajo')
        {
            // habilitamos
            ini.disabled=false;
            end.disabled=false;
        }
        else if(val == 'Descanso'){
            // deshabilitamos
            ini.disabled=true;
            end.disabled=true;
            // ini.value = '--:--';
            // end.value = '--:--';
        }
    }
    function descanso()
    {
        return document.getElementById("status").value == 'Descanso';
    }
</script>

</body>
</html>
