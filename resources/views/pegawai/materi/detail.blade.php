@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Materi Ajar</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('pegawai.materi.index')}}" class="text-white text-decoration-none">Kelola Sambutan Kepala Sekolah</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Materi Ajar</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="far fa-address-card"></i> Detail Materi Ajar</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$materi->judul}}</h5>
                    <p>{!! $materi->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 