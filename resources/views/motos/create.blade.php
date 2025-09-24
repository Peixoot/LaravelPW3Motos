@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cadastrar Moto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Atenção!</strong> Preencha todos os campos obrigatórios.<br><br>
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('motos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label>Marca:</label>
            <input type="text" name="marca" class="form-control" placeholder="Ex: Honda">
        </div>

        <div class="form-group mb-3">
            <label>Modelo:</label>
            <input type="text" name="modelo" class="form-control" placeholder="Ex: CG 160">
        </div>

        <div class="form-group mb-3">
            <label>Motor:</label>
            <input type="text" name="motor" class="form-control" placeholder="Ex: 160cc">
        </div>

        <div class="form-group mb-3">
            <label>Data de Cadastro:</label>
            <input type="date" name="datacad" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Foto:</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-secondary" href="{{ route('motos.index') }}">Voltar</a>
    </form>
</div>
@endsection
