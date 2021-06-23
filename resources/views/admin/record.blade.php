<!DOCTYPE html>

{{-- This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only. --}}

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin | Historial</title>

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

<body class="hold-transition sidebar-mini">
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

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3" action="{{ route('record.index') }}" method="GET" id="buscador">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" id="search" type="search" placeholder="Fecha: 'AAAA-MM'" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>

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
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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
                                    <a href="{{ url('/calendar') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Horarios | Calendario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/record') }}" class="nav-link active">
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
                            <h1>Historial</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/calendar') }}">Home</a></li>
                                <li class="breadcrumb-item active">Historial</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Historial Trabajo</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            data-toggle="tooltip" title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Hora Entrada</th>
                                                <th>Hora Salida</th>
                                                <th>Horas Trabajadas</th>
                                                <th>Estado Evento</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($events as $event)
                                                <tr>
                                                    <td>{{ $event->date }}</td>
                                                    <td>{{ $event->time_ini }}</td>
                                                    <td>{{ $event->time_end }}</td>
                                                    <td>{{ $event->cant_hrs }}</td>
                                                    <td>
                                                        @if ($event->status == 'Trabajo')
                                                            <span class="badge badge-primary">Trabajo</span>
                                                        @else
                                                            <span class="badge badge-success">Descanso</span>
                                                        @endif
                                                    </td>
                                                    <td class="float-right">
                                                        <a class="btn btn-info btn-sm"
                                                            href="{{ route('record.edit', $event) }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Editar
                                                        </a>
                                                        <button data-toggle="modal" data-target="#deleteModal"
                                                            data-id="{{ $event->id }}"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                            Borrar
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{ $events->links() }}

                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel"></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Seguro desea borrar el registro selecccionado?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                                                Cerrar
                                            </button>
                                            <form id="formDelete" data-action="{{ route('record.destroy', 0) }}"
                                                method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                    Borrar
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
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
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.google.es/"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.instagram.com/camii.vazquezz_/" role="button" data-mdb-ripple-color="dark"><i
                            class="fab fa-instagram"></i></a>

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
                © {{ date('Y') }} Copyright:
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

    <!-- Page specific script -->
    <script>
        window.onload = function() {
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                action = $('#formDelete').attr('data-action').slice(0, -
                    1) // Elimina la ultima posicion del http, en este caso el 0 pasado como parametro.
                action += id
                console.log(action)
                $('#formDelete').attr('action', action)

                var modal = $(this)
                modal.find('.modal-title').text('Vas a borrar la Solicitud: ' + id)
            });
        };

        // Para añadir / en la url en Desarrollo.
        var url = 'http://127.0.0.1:8000';
        window.addEventListener('load', function (){
           // Buscador:
            $('#buscador').submit(function(){
                $(this).attr('action',url+'/record/'+$('#buscador #search').val());
            })
        })

    </script>
</body>

</html>
