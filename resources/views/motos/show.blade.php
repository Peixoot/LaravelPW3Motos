<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h2>Detalhes da Moto</h2>

        <div class="card">
            <div class="card-body">
                <p><strong>Marca:</strong> {{ $moto->marca }}</p>
                <p><strong>Modelo:</strong> {{ $moto->modelo }}</p>
                <p><strong>Motor:</strong> {{ $moto->motor }}</p>
                <p><strong>Data de Cadastro:</strong> {{ \Carbon\Carbon::parse($moto->datacad)->format('d/m/Y') }}</p>

                @if($moto->foto)
                    <p><strong>Foto:</strong></p>
                    <img src="{{ asset('storage/' . $moto->foto) }}" alt="Foto da moto" width="250" class="img-fluid rounded">
                @endif
            </div>
        </div>

        <a class="btn btn-secondary mt-3" href="{{ route('motos.index') }}">Voltar</a>
    </div>
    @endsection

</div>
