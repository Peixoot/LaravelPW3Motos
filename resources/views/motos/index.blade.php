@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">Lista de Motos</div>
            <div class="card-body">
                <a href="{{ route('motos.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Adicionar nova moto</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Motor</th>
                        <th>Data de Cadastro</th>
                        <th>Foto</th>
                        <th width="280px">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($motos as $moto)
                        <tr>
                            <td>{{ $moto->id }}</td>
                            <td>{{ $moto->marca }}</td>
                            <td>{{ $moto->modelo }}</td>
                            <td>{{ $moto->motor }}</td>
                            <td>{{ \Carbon\Carbon::parse($moto->datacad)->format('d/m/Y') }}</td>
                            <td>
                                @if($moto->foto)
                                    <img src="{{ asset('storage/' . $moto->foto) }}" alt="Foto da moto" width="80">
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                            <form action="{{ route('motos.destroy',$moto->id) }}" method="POST">
                            
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('motos.show', $moto->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('motos.edit', $moto->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>Nenhuma moto registrada!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

            {!! $motos->links() !!}

            </div>
        </div>
    </div>    
</div>
    
@endsection