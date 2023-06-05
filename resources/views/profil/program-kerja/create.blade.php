@extends('layouts.templet')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Tambah Lowongan Kerja</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('profil.program-kerja.index')}}" class="text-white text-decoration-none">Kelola Lowongan Kerja</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Tambah Lowongan Kejra</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Tambah Lowongan Kerja</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.program-kerja.post') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>NAMA LOWONGAN KERJA</label>
                                <input type="text" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Nama Lowongan Kerja" class="form-control @error('judul') is-invalid @enderror">

                                @error('judul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>LOKASI LOWONGAN KERJA</label>
                                <input type="text" name="lokasi" value="{{ old('lokasi') }}" placeholder="Masukkan Lokasi Lowongan Kerja" class="form-control @error('lokasi') is-invalid @enderror">

                                @error('lokasi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL LOWONGAN KERJA</label>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal'), date('d-m-Y') }}">
                                @error('tanggal')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop