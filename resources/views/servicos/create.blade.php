@extends('adminlte::page')

@section('title', 'Novo Servico')

@section('content_header')
    <h1>Novo Servico</h1>
@stop

@section('content')
    @include('_mendagens')
    <form action="{{ route('servicos.store') }}" method="post">
        @include('servicos._form');
    </form>
@stop
