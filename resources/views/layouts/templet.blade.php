<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('image/logo/logo.png')}}">
    <title> SMK BISA BELAJAR</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css" />
    <script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{asset('datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.js')}}"></script>
    <style>
    .kotak {
        color: #fff;
    }

    .table-style .today {
        background: #2A3F54;
        color: #ffffff;
    }

    .table-style th:nth-of-type(7),
    td:nth-of-type(7) {
        color: blue;
    }

    .table-style th:nth-of-type(1),
    td:nth-of-type(1) {
        color: red;
    }

    .table-style tr:first-child th {
        background-color: #F6F6F6;
        text-align: center;
        font-size: 15px;
    }

</style>
    <style>
        *{
            font-family: 'Poppins';
        }
    </style>
    @yield('css')
</head>

<body>
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
                        <a href="">SMK BISA BELAJAR</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="">SMP</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header"> MENU SIM</li>

                        <li class="nav-item">
                         <a class="nav-link collapsed" href="/home">
                                <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-archway"></i><span>Profil</span></a>
                                <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{route('profil.iden.index')}}">Identitas Sekolah</a></li>
                                <li><a class="nav-link" href="{{route('profil.visi-misi.index')}}">Visi dan Misi</a></li>
                                <li><a class="nav-link" href="{{route('profil.sejarah.index')}}">Sejarah</a></li>
                                <li><a class="nav-link" href="{{route('profil.struktur.index')}}">Struktur Organisasi</a></li>
                                <li><a class="nav-link" href="{{route('profil.sarana-prasarana.index')}}">Sarana dan
                            Prasarana</a></li>
                        
                
                            <li><a class="nav-link" href="{{route('profil.kepala-sekolah.index')}}">Sambutan KPS</a></li>
                            <li><a class="nav-link" href="{{route('pegawai.logo.index')}}">Logo</a></li>
                            <li><a class="nav-link" href="{{route('pegawai.navbar.index')}}"> Gambar Depan Sekolah</a></li>
                                    </ul>
                            </li>  
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-house-user"></i><span>Kepegawaian</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{route('pegawai.pendidik.index')}}"> Direktori Guru dan TU</a></li>
                                    <li><a class="nav-link" href="{{route('pegawai.silabus.index')}}">Silabus</a></li>
                                   </ul>
                            </li>  
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas  fa-users"></i>   <span> Data Siswa</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link"href="{{route('siswa.data-siswa.index')}}">Direktori Siswa</a></li>
                                    <li><a class="nav-link" href="/admin/prestasi">Prestasi Siswa</a>
                                   </ul>
                            </li>  
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Data Alumi</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{route('alumni.data-alumni.index')}}">Direktori Alumni</a></li>
                                  
                                   </ul>
                            </li>  
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>  <span>Fitur Pelengkap </span></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="/admin/agenda">Agenda</a></li>
                                    <li><a class="nav-link" href="/admin/berita">Berita</a></li>
                                    <li><a class="nav-link" href="/admin/pengumuman">Pengumuman</a></li>
                                    <li><a class="nav-link" href="/admin/intrakulikuler">Intrakulikuler</a></li>
                                    <li><a class="nav-link" href="/admin/ekstrakulikuler">Ekstrakulikuler</a></li>
                                    <li><a class="nav-link" href="/admin/eskul">Ekskul</a></li>
                                    <li><a class="nav-link"  href="{{route('kontak.weblink.index')}}">Weblink</a></li>
                                    <li><a class="nav-link" href="{{route('kontak.kontak-sekolah.index')}}">Kontak</a></li>
                                    <li><a class="nav-link" href="/admin/galeri">Galeri </a></li>
                                    <li><a class="nav-link" href="{{route('profil.vidio.index')}}">Vidio</a></li>
                                    <li><a class="nav-link" href="{{route('profil.kemitraan.index')}}">Kemitraan</a></li>
                                    <li><a class="nav-link" href="{{route('profil.program-kerja.index')}}">Program Kerja</a></li>
                                    <li><a class="nav-link" href="{{route('profil.komite-sekolah.index')}}">Komite Sekolah</a></li>
                                </ul>
                            </li>  
                            
                            <li class="dropdown">
                          <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"
                  class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</li>
                          
                            <!-- <li class="menu-header"> MENU WEB</li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-building"></i><span>Profil </span></a>
                                <ul class="dropdown-menu">

              
                                <li><a class="collapse-item" href="">Sambutan Kepala
                            Sekolah</a>
                            <li> <a class="collapse-item" href="">Identitas</a></li>
                            <li> <a class="collapse-item" href="">Visi dan Misi</a></li>
                            <li>  <a class="collapse-item" href="">Sejarah</a></li>
                            <li>  <a class="collapse-item" href="">Struktur Organisasi</a></li>
                            <li>   <a class="collapse-item" href="">Sarana dan
                            Prasarana</a></li>
                            <li>  <a class="collapse-item" href="/admin/prestasi">Prestasi</a></li>
                            <li>   <a class="collapse-item" href="/admin/ekstrakulikuler">Ekstrakulikuler</a></li>
                            <li>  <a class="collapse-item" href="">Kemitraan</a></li>
                            <li>  <a class="collapse-item" href="">Program Kerja</a></li>
                            <li>   <a class="collapse-item" href="">Komite Sekolah</a></li>
                            <li>   <a class="collapse-item" href="">Logo</a></li>
                            <li>  <a class="collapse-item" href=""> Gambar Depan Sekolah</a></li>
                        </ul>
            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-list"></i><span>Fitur Pelengkap</span></a>
                                <ul class="dropdown-menu">
                        <li><a class="nav-item" href="/admin/agenda">Agenda</a></li>
                        <li><a class="nav-item" href="/admin/berita">Berita</a></li>
                        <li> <a class="nav-item" href="/admin/pengumuman">Pengumuman</a></li>
                        <li><a class="nav-item" href="/admin/intrakulikuler">Intrakulikuler</a></li>
                        <li><a class="nav-item" href="/admin/eskul">Ekskul</a></li>
                        <li> <a class="nav-item" href="">Weblink</a></li>
                        <li><a class="nav-item" href="">Kontak</a></li>
        
                        </ul>
            </li> -->
                          
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> SMK BISA BELAJAR <div class="bullet"></div>Farijan
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
    @yield('js')
    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }

    </script>
</body>
<script>
    import Calendar from 'color-calendar';
    import 'color-calendar/dist/css/theme-basic.css';
    import 'color-calendar/dist/css/theme-glass.css';

</script>
<script>
    new Calendar({
        id: '#color-calendar',
    })

</script>
<script>
    const myEvents = [{
            start: '2021-04-15T06:00:00',
            end: '2021-04-15T20:30:00',
            name: 'Event 1',
            url: 'https://www.cssscript.com',
            desc: 'Description 1',
            // more key value pairs here
        }, {
            start: '2021-04-16T06:00:00',
            end: '2021-04-16T20:30:00',
            name: 'Event 2',
            url: 'https://www.cssscript.com',
        }, {
            start: '2021-04-16T06:00:00',
            end: '2021-04-17T20:30:00',
            name: 'Event 3',
            url: 'https://www.cssscript.com',
        }, ],
        new Calendar({
            id: '#color-calendar',
            eventsData: myEvents,
        })

</script>
<script>
    new Calendar({

        // small or large
        calendarSize: 'large',

        // an array of layout modifiers
        layoutModifiers: 'month-align-left',

        // basic | glass
        theme: 'glass',

        // custom colors
        primaryColor: '#1a237e',
        headerColor: 'rgb(0, 102, 0)',
        headerBackgroundColor: 'black',
        weekdaysColor: 'based on theme',

        // short | long-lower | long-upper
        weekdayDisplayType: 'short',

        // short | long
        monthDisplayType: 'long',

        // 0 (Sun)
        startWeekday: 0,

        // font family
        fontFamilyHeader: 'based on theme',
        fontFamilyWeekdays: 'based on theme',
        fontFamilyBody: 'based on theme',

        // shadow CSS
        dropShadow: 'based on theme',

        // border CSS
        border: based on theme ',

        // border radius
        borderRadius: '0.5rem',

        // disable month year pickers
        disableMonthYearPickers: false,

        // disable click on dates
        disableDayClick: false,

        // disable the arrows to navigate between months
        disableMonthArrowClick: false

    })

</script>
<script>
    new Calendar({
        dateChanged: (currentDate, DateEvents) => {
            // do something
        },
        monthChanged: (currentDate, DateEvents) => {
            // do something
        };
    })

</script>
<script>
    // set date 
    instance.setDate(date);

    // reset 
    instance.reset();

    // get selected date
    instance.getSelectedDate();

    // set events 
    instance.setEventsData(eventArray);

    // add events
    instance.addEventsData(eventArray)

    // get event data
    instance.getEventsData();

    // set weekday display type
    instance.setWeekdayDisplayType(type);

    // set month display type
    instance.setMonthDisplayType(type);

</script>


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