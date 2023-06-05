<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.js')}}"></script>
</head>
<style>
    *{
        font-family: 'Poppins';
    }
    
</style>

<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background:#10A5F5;border:5px #10A5F5;">
        <div class="container-fluid">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" style="background-color:#2980b9;" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <i class="fa fa-bars" style="color:#fff;"></i>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="width:100%;">
                <ul class="navbar-nav text-white">
                    <li class="nav-item ">
                        <a class="nav-link font14 text-white" id="klik" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            PROFIL
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('sambutan-kepala-sekolah')}}">Sambutan Kepala
                                Sekolah</a>
                            <a class="dropdown-item font14" href="{{route('sejarah')}}">Sejarah</a>
                            <a class="dropdown-item font14" href="{{route('struktur-organisasi')}}">Struktur Organisasi</a>
                            <!-- <a class="dropdown-item font14" href="{{route('akreditasi')}}">Akreditasi</a> -->
                            <a class="dropdown-item font14" href="{{route('visi-misi')}}">Visi, Misi Dan Tujuan</a>
                            <a class="dropdown-item font14" href="{{route('profile-sekolah')}}">Profile Sekolah</a>
                            <!-- <a class="dropdown-item font14" href="{{route('galeri')}}">Fasilitas</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            GURU
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('direktori-guru')}}">Direktori Guru</a>
                            <a class="dropdown-item font14" href="{{route('silabus')}}">Silabus</a>
                            <!-- <a class="dropdown-item font14" href="#">Materi Ajar</a>
                            <a class="dropdown-item font14" href="#">Materi Ujian</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            SISWA
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('direktori-siswa')}}">Direktori Siswa</a>
                            <a class="dropdown-item font14" href="{{route('prestasi')}}">Prestasi Siswa</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            ALUMNI
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('direktori-alumni')}}">Direktori Alumni</a>
                         </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            GALERI
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('galeri')}}">Galeri</a>
                            <a class="dropdown-item font14" href="{{route('vidio')}}">Vidio</a>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            KEGIATAN
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('intrakulikuler')}}">Intrakulikuler</a>
                            <a class="dropdown-item font14" href="{{route('ekstrakulikuler')}}">Ekstrakulikuler</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            INFORMASI
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('berita')}}">Berita</a>
                            <a class="dropdown-item font14" href="{{route('agenda')}}">Agenda</a>
                            <a class="dropdown-item font14" href="{{route('pengumuman')}}">Pengumuman</a>
                            <!-- <a class="dropdown-item font14" href="">Inpo Weblink</a> -->
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            FITUR LAINNYA
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('kemitraan')}}">Kemitraan</a>
                            <a class="dropdown-item font14" href="{{route('program-kerja')}}">Program Kerja</a>
                            <a class="dropdown-item font14" href="{{route('komite-sekolah')}}">Komite Sekolah</a>
                            <!-- <a class="dropdown-item font14" href="">Inpo Weblink</a> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <br>
        
   

        @yield('header')
        

    <div class="container mb-5">
        @yield('content')
    </div>

    

    @stack('scripts')
</body>
</html>