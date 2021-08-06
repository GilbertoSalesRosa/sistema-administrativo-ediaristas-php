@extends('adminlte::page')

@section('title', 'Lista de Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    @include('_mensagens_sessao')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Acoes</th>
            </tr>
        </thead>
        <tbody
            @forelse ( $usuarios as $usuario)
                <tr>
                    <th>{{ $usuario->id }}</th>
                    <td> {{ $usuario->name}}</td>
                    <td> {{ $usuario->email}}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $usuario)}}" class="btn btn-primary">Atualizar</a>
                        <form action="{{ route('usuarios.destroy', $usuario)}}" method="post" style="display: inline" >
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja reslmente excluir ? ') " >Excluir</button>

                        </form>
                    </td>
                </tr>            
            @empty
                <tr>
                    <th></th>
                    <th>Nenhum registro foi encontrado</th>
                    <th></th>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $usuarios->links() }}
    </div>
    <div class="float-right">
        <a href="{{ route('usuarios.create')}}" class="btn btn-success" >Novo usuario</a>
    </div>

@stop