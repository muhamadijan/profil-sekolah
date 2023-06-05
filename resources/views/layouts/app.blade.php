<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SMP PGRI CIRANJANG</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.css')}}">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"/>
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/css/animate.css" rel="stylesheet"/>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{asset('datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.js')}}"></script>
    <style>
        *{
            font-family: 'Poppins';
        }
    </style>
    @yield('css')
</head>

<body @if(auth()->user()->level == 'siswa') style="background: #f7f7f7;" @else style="background:#f2f2f2;" @endif>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="https://img2.pngio.com/default-image-png-picture-710222-default-image-png-default-png-265_265.png"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="">SMP PGRI CIRANJANG</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="">SMP</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header"> MENU PERIBADI</li>
                     
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Data Pribadi</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="">Data Pribadi</a></li>
                                    <li><a class="nav-link" href="">Dokumen Pribadi</a></li>
                                   </ul>
                            </li>  
                            <li class="menu-header">MAIN MENU</li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href=""><i class="fas fa-pencil-alt"></i>
                                    <span>Nilai Pengetahuan  </span>

                                </a>
                            </li>
            
                            <li class="nav-item dropdown">
                                <a class="nav-link" href=""><i class="fas fa-pencil-alt"></i>
                                <span>Nilai Keterampilan  </span>

                                </a>
                            </li>
                            <li class="menu-header"> MENU WALI KELAS</li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href=""><i class="fas fa-users"></i>
                                    <span>Data Siswa  </span>

                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href=""><i class="fa fa-pencil-alt"></i>
                                    <span>Nilai Sikap  </span>

                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href=""><i class="fas fa-trophy"></i>
                                    <span>Nilai Ekstrakulikuler  </span>

                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href=""><i class="fa fa-hand-pointer"></i>
                                    <span>Absensi Kelas  </span>

                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href=""><i class="fas fa-book"></i>
                                    <span>Rapot Siswa  </span>

                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href=""><i class="fas fa-signal"></i>
                                    <span>Renking  </span>

                                </a>
                            </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 <div class="bullet"></div> SMP PGRI CIRANJANG <div class="bullet"></div> All Rights
                    Reserved.
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        //active select2


        //flash message
        @if(session()-> has('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()-> has('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif
    </script>
</body>
</html>
