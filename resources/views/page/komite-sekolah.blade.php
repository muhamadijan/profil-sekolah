@extends('layouts.page.app')

@section('title', 'komite sekolah')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #10A5F5;"><i class="fas fa-newspaper" aria-hidden="true"></i> komite sekolah</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#10A5F5;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#10A5F5;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-newspaper"></i> komite sekolah</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')

    @foreach($komite as $komite)
    <div class="col-lg-12 mt-5 mb-4">
        <div class="row">
            <div class="col-lg-8">
                <a href="{{route('komite-sekolah', $komite->id)}}" style="color:#10A5F5;font-weight:bold;">{{$komite->judul}}</a>  
                <p class="mt-3">
                <p>{!! $komite->isi !!}</p>
                 </p>
                
                </div>
            </div>
            
            
        </div>   
    @endforeach
@stop 