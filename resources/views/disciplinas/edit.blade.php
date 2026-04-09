@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Disciplina: {{ $disciplina->nome }}</h1>
    <form action="{{ route('disciplinas.update', $disciplina) }}" method="POST">
        @method('PUT')
        @include('disciplinas.form')
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection