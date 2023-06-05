@extends('layouts.templet')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Logo Sekolah</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Logo Sekolah</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-image"></i> Logo Sekolah</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                        @if(count($logo) == 0)
                            <a href="{{route('pegawai/logo/create')}}" class="btn btn-success mb-4"><i class="fas fa-plus-circle"></i> Tambah Logo</a>&nbsp;
                            @endif
                        </div>
                    </div>
                    @if(session('sukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">LOGO</th>
                                <th scope="col">ICON</th>
                                <th scope="col">NAMA SEKOLAH</th>
                                <th scope="col">ISI</th>
                                <th scope="col" style="width: 25%;text-align: center">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                          @foreach ($logo as $no => $logo)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td><img src="{{ asset('/image/'.$logo->logo)}}" width="70px"></td>
                                
                                   
                                    <td><img src="{{ asset('/image/'.$logo->icon)}}" width="70px"></td>
                                
                                    <td>{{ $logo->nama}}</td>
                                    <td>{{ $logo->isi }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('pegawai.logo.edit', $logo->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a href="/pegawai/logo/index/delete/{{ $logo->id }}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

<script>
    // datatable
    $(document).ready(function() {
        $('#guru').DataTable();
    });

    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {

                    //ajax delete
                    jQuery.ajax({
                        url: "/admin/galeri-del/"+id,
                        data:     {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
@stop 