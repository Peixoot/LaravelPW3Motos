<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h2>Detalhes da Moto</h2>

        <div class="card">
            <div class="card-body">
                <p><strong>Marca:</strong> {{ $moto->marca }}</p>
                <p><strong>Modelo:</strong> {{ $moto->modelo }}</p>
                <p><strong>Ano:</strong> {{ $moto->ano }}</p>
                <p><strong>Cor:</strong> {{ $moto->cor }}</p>
                <p><strong>Preço:</strong> R$ {{ number_format($moto->preco, 2, ',', '.') }}</p>
            </div>
        </div>

        <a class="btn btn-secondary mt-3" href="{{ route('motos.index') }}">Voltar</a>
    </div>
    @endsection
</div>
