<div>
        @extends('layouts.app')

    @section('content')
    <div class="container">
        <h2>Lista de Motos</h2>
        <a class="btn btn-success mb-3" href="{{ route('motos.create') }}">Cadastrar Moto</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Cor</th>
                <th>Preço</th>
                <th width="280px">Ações</th>
            </tr>
            @foreach ($motos as $moto)
                <tr>
                    <td>{{ $moto->id }}</td>
                    <td>{{ $moto->marca }}</td>
                    <td>{{ $moto->modelo }}</td>
                    <td>{{ $moto->ano }}</td>
                    <td>{{ $moto->cor }}</td>
                    <td>R$ {{ number_format($moto->preco, 2, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('motos.destroy',$moto->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('motos.show',$moto->id) }}">Mostrar</a>
                            <a class="btn btn-primary" href="{{ route('motos.edit',$moto->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $motos->links() !!}
    </div>
    @endsection

</div>
