@extends('layouts.templet')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">SMK PLUS INSAN ANDALAN CIANJUR</h1>
        <center>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard Home</li>
            </ol>
    </div>


    <div class="row mb-3">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">ALUMNI</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $alumni }}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                            </div>
                        </div>
                        <div class="card-icon bg-primary">
                            <i class="fa fa-users text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1"> GURU </div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $pendidik }}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> </span>
                            </div>
                        </div>

                        <div class="card-icon bg-warning">
                            <i class="fa fa-chalkboard-teacher text-white fa-2x"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1"> MURID </div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $siswa }}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> </span>
                            </div>
                        </div>
                        <div class="card-icon bg-success">
                            <i class="fa fa-users text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- kalender -->
        <div id="color-calendar" style="width: 100%;">
        </div>
    </div>
</div>
</div>
    </section>
</div>

@endsection
