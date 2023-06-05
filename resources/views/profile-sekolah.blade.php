@extends('layouts.page.app')

@section('title', 'Profile Sekolah')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #10A5F5;"><i class="fas fa-building" aria-hidden="true"></i> PROFILE SEKOLAH</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#10A5F5;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#10A5F5;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-building"></i> Profile</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
@foreach($iden as $iden)
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card  shadow mt-4">
                
                <div class="card-body">
                
                    <div class="table-responsive">
                        <center>
                            <table class="mt-3">
                                <tr style="font-size: 14px;">
                                    <td>Nama Sekolah</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->nama_sekolah}}</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr style="font-size: 14px;">
                                    <td>NPSN</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->npsn}}</td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Alamat</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->alamat}}</td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Desa</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->desa}}</td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Kecamatan</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->kecamatan}}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Kabupaten</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->kabupaten}}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Provinsi</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->provisi }}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Telepon</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->telepon}}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Email Sekolah</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->email}}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                
                                <tr style="font-size: 14px;">
                                    <td>SK Pendirian Sekolah</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->sk_pendirians}}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Tanggal SK Pendirian </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->tangan_skp}}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>SK Izin Operasional</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->sk_izin}}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Tanggal SK Izin Operasional</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->tanggal_sk_ijin}}</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr style="font-size: 14px;">
                                    <td>Akreditas</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>{{ $iden->akreditas}}</td>
                                </tr>
                                
                                <tr>
                                    <td></td>
                                </tr>   
                            </table>
                        </center>
                        
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card shadow mt-4">
                <div class="card-body">
                    <img src="{{ asset('/image/'.$iden->gambar)}}" alt="" class="img img-thumbnail border-0">
                </div>
            </div>
        </div>
    </div>
</div>

        
@endforeach
@stop