@extends('layouts.templet')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>DATA SISWA</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">SISWA</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                <i class="fas fa-user-graduate"></i> DATA SISWA</h4>
                </div>
                @if(session('sukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('sukses')}}
                    </div>
                    @endif
                <div class="card-body">
                <div class="container">
                        <div class="row">
                            <a href="{{route('siswa/data-siswa/create')}}" class="btn btn-success mb-4"><i class="fas fa-plus-circle"></i> Tambah Data siswa</a>&nbsp;
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTabel">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NISN&nbsp;</th>
                                <th scope="col">NIS&nbsp;</th>
                                <th scope="col">NAMA&nbsp;</th>
                                <th scope="col">L/P&nbsp;</th>
                                <th scope="col">TEMAPAT TANGGAL LAHIR&nbsp;</th>
                                <th scope="col">KELAS&nbsp;</th>
                                <th scope="col">FOTO&nbsp;</th>
                                <th scope="col" style="width: 25%;text-align: center">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($siswa as $no => $siswa)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->nis}}</td>
                                    <td>{{ $siswa->nama}}</td>
                                    <td>{{ $siswa->kelamin }}</td>
                                    <td>{{ $siswa->tempat_tanggal_lahir}}</td>
                                    <td>{{ $siswa->kelas}}</td>
                                    <td>
                                        <a href="{{ asset('/image/'.$siswa->gambar)}}" style="font-size: 12px;" class="btn btn-success btn-sm">
                                            <i class="fas fa-camera"></i> Lihat Gambar
                                        </a> 
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('siswa.data-siswa.edit', $siswa->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                
                                        <a href="/siswa/data-siswa/index/delete/{{ $siswa->id }}" class="btn btn-sm btn-danger">
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
@endsection
@section('js')
<script>
    
    $(document).ready(function () {
   $('#dataTabel').DataTable( {
        "order": [
          [ 3, "asc" ],
          ],
          
        "columnDefs": [{
          "targets": 0,
          "orderable": false
        }]
    } );
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
                        url: "/admin/berita-del/"+id,
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