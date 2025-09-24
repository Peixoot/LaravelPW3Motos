<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h2>Editar Moto</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Atenção!</strong> Corrija os erros abaixo.<br><br>
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('motos.update',$moto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label>Marca:</label>
                <input type="text" name="marca" value="{{ $moto->marca }}" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>Modelo:</label>
                <input type="text" name="modelo" value="{{ $moto->modelo }}" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>Ano:</label>
                <input type="text" name="ano" value="{{ $moto->ano }}" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>Cor:</label>
                <input type="text" name="cor" value="{{ $moto->cor }}" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>Preço:</label>
                <input type="text" name="preco" value="{{ $moto->preco }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a class="btn btn-secondary" href="{{ route('motos.index') }}">Voltar</a>
        </form>
    </div>
    @endsection
</div>
