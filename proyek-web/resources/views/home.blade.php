@extends('layout.main-layout')
@section('title', 'Home')

@section('content')
    <div class="main">
        <section class="hidden">
            <h2 class=" pt-4">TERANG JAYA BANGUNAN</h2>
        </section>
        <section class="hidden2">
            <p class="">Menyediakan bahan berkualitas dengan harga yang bersahabat</p>
        </section>
        <section class="hidden3">
            <a href="{{ route('user.index') }}" class="btn btn-outline-primary btn-lg cat">Lihat Catalog</a>
        </section>
    </div>
@endsection
