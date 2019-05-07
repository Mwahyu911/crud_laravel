@extends('layouts.template') 
@section('title', 'Tentang Kami') 
@section('intro-header')
<!-- Header -->
<header class="intro-header text-white" style="background: url('{{ 
asset
('/images/bg2.jpg') }}') no-repeat top center;">
    <div class="container text-center">
        <h1>Tentang Belajar Koding</h1>
        <p class="lead">Contoh Halaman Tentang di Belajar Koding</p>
    </div>
</header>
<!-- END : Header -->
@endsection @section('main')
<!-- Main -->
<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Halaman Tentang Kami</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamclaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>
<!-- END : Main -->
@endsection