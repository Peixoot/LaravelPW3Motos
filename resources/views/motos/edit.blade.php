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

    <form action="{{ route('motos.update', $moto->id) }}" method="POST" enctype="multipart/form-data">
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
            <label>Motor:</label>
            <input type="text" name="motor" value="{{ $moto->motor }}" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Data de Cadastro:</label>
            <input type="date" name="datacad" value="{{ $moto->datacad }}" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Foto:</label><br>
            @if($moto->foto)
                <img src="{{ asset('storage/' . $moto->foto) }}" alt="Foto da moto" width="120" class="mb-2"><br>
            @endif
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a class="btn btn-secondary" href="{{ route('motos.index') }}">Voltar</a>
    </form>
</div>
@endsection

</div>
