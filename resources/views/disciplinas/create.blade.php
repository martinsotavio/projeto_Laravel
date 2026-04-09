@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nova Disciplina</h1>
    <form action="{{ route('disciplinas.store') }}" method="POST">
        @include('disciplinas.form')
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection