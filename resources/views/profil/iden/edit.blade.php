@extends('layouts.templet')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Edit Identitas</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('profil.iden.index')}}" class="text-white text-decoration-none">Identitas Sekolah</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Identitas</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Identitas</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.iden.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <input type="hidden" name="id" value="{{$iden->id}}">
                            <div class="form-group">
                                <label>GAMBAR SEKOLAH</label>
                                <input type="file" name="gambar" value="{{$iden->gambar}}" placeholder="Masukkan Gambar " class="form-control @error('gambar') is-invalid @enderror">

                                @error('gambar')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NAMA SEKOLAH</label>
                                <input type="text" name="nama_sekolah" value="{{$iden->nama_sekolah}}" placeholder="Masukkan Nama Sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror">

                                @error('nama_sekolah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NPSN</label>
                                <input type="text" name="npsn" value="{{$iden->npsn}}" placeholder="Masukkan Npsn Sekolah" class="form-control @error('npsn') is-invalid @enderror">

                                @error('npsn')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat"value="{{$iden->alamat}}" placeholder="Masukkan Wakil Alamat Sekolah" class="form-control @error('alamat') is-invalid @enderror">

                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>DESA</label>
                                <input type="text" name="desa" value="{{$iden->desa}}" placeholder="Masukkan Desa Sekolah" class="form-control @error('desa') is-invalid @enderror">

                                @error('desa')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KECAMATAN</label>
                                <input type="text" name="kecamatan"value="{{$iden->kecamatan}}" placeholder="Masukkan Kecamatan Sekolah" class="form-control @error('kecamatan') is-invalid @enderror">

                                @error('kecamatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label>KABUPATEN</label>
                                <input type="text" name="kabupaten" value="{{$iden->kabupaten}}" placeholder="Masukkan Kabupaten Sekolah" class="form-control @error('kabupaten') is-invalid @enderror">

                                @error('kabupaten')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>PROVINSI</label>
                                <input type="text" name="provisi" value="{{$iden->provisi}}" placeholder="Masukkan Provinsi Sekolah" class="form-control @error('provisi') is-invalid @enderror">

                                @error('provisi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TELEPON</label>
                                <input type="text" name="telepon" value="{{$iden->telepon}}" placeholder="Masukkan  teleponSekolah" class="form-control @error('telepon') is-invalid @enderror">

                                @error('telepon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>EMAIL SEKOLAH</label>
                                <input type="text" name="email" value="{{$iden->email}}" placeholder="Masukkan Email Sekolah" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>SK PENDIRIAN SEKOLAH</label>
                                <input type="text" name="sk_pendirians"value="{{$iden->sk_pendirians}}" placeholder="Masukkan Sk Pendirian Sekolah" class="form-control @error('sk_pendirians') is-invalid @enderror">

                                @error('sk_pendirians')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL SK PENDIRIAN</label>
                                <input type="text" name="tangan_skp" value="{{$iden->tangan_skp}}" placeholder="Masukkan Tanggal Skp Sekolah" class="form-control @error('tangan_skp') is-invalid @enderror">

                                @error('tangan_skp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>SK IJIN OPERASIONAL</label>
                                <input type="text" name="sk_izin" value="{{$iden->sk_izin}}" placeholder="Masukkan Sk Ijin Sekolah" class="form-control @error('sk_izin') is-invalid @enderror">

                                @error('sk_izin')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL SK IJIN OPRASIONAL</label>
                                <input type="text" name="tanggal_sk_ijin" value="{{$iden->tanggal_sk_ijin}}" placeholder="Masukkan Sk Ijin Sekolah" class="form-control @error('tanggal_sk_ijin') is-invalid @enderror">

                                @error('tanggal_sk_ijin')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>AKREDITAS</label>
                                <input type="text" name="akreditas" value="{{$iden->akreditas}}" placeholder="Masukkan Akreditas Sekolah " class="form-control @error('akreditas') is-invalid @enderror">

                                @error('akreditas')
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
</div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.12/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: "textarea.alamat",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
@stop