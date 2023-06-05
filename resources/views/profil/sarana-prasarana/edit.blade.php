@extends('layouts.templet')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
                <h1>Edit Sarana Prasarana</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('profil.sarana-prasarana.index')}}" class="text-white text-decoration-none">Kelola Sarana Prasarana</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Sarana Prasarana</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Sarana Prasarana</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('profil.sarana-prasarana.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <input type="hidden" name="id" value="{{$sarana->id}}">
                            <div class="form-group">
                                <label>JUDUL Sarana Prasarana</label>
                                <input type="text" name="judul" value="{{$sarana->judul}}" placeholder="Masukkan Judul Sarana Prasarana" class="form-control @error('judul') is-invalid @enderror">

                                @error('judul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>GAMBAR </label>
                                <input type="file" name="gambar" value="{{$sarana->gambar}}" class="form-control @error('gambar') is-invalid @enderror">

                                @error('gambar')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">ISI Sarana Prasarana</label>
                                <textarea class="form-control alamat @error('isi') is-invalid @enderror" name="isi" placeholder="Masukkan Isi Sarana Prasarana" rows="10">{!! $sarana->isi !!}</textarea>
                                @error('isi')
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