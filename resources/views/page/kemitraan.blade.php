@extends('layouts.page.app')

@section('title', 'Kemitraan')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #10A5F5;"><i class="fas fa-newspaper" aria-hidden="true"></i> Kemitraan</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#10A5F5;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#10A5F5;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-newspaper"></i> Kemitraan</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')

    @foreach($kemitraan as $kemitraan)
    <div class="col-lg-12 mt-5 mb-4">
        <div class="row">
            <div class="col-lg-8">
                <a href="{{route('kemitraan', $kemitraan->id)}}" style="color:#10A5F5;font-weight:bold;">{{$kemitraan->judul}}</a>  
<br><br>
                <a href="/image/{{$kemitraan->gambar}}" target="__blank">
                    <img src="/image/{{$kemitraan->gambar}}" alt="" class="card-img-top" style="height:250px;">
                </a>
                <p class="mt-3">
                <p>{!! $kemitraan->isi !!}</p>
                </p>
                
            </div>
        </div>
        
        
    </div>    
    @endforeach
@stop 