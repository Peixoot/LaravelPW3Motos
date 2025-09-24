{{-- resources/views/welcome.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="display-5">Bem-vindo ao Painel</h1>
        <p class="lead">Acesse rapidamente as áreas do sistema.</p>
    </div>

    <div class="row g-4 justify-content-center">
        <!-- Card Products -->
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text flex-grow-1">Gerencie os produtos cadastrados no sistema.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Ir para Products</a>
                </div>
            </div>
        </div>

        <!-- Card Motos -->
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Motos</h5>
                    <p class="card-text flex-grow-1">Gerencie as motos: cadastro, edição e fotos.</p>
                    <a href="{{ route('motos.index') }}" class="btn btn-success mt-3">Ir para Motos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
