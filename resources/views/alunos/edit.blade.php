@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Aluno: {{ $aluno->nome }}</h1>

    <form action="{{ route('alunos.update', $aluno) }}" method="POST">
        @method('PUT')
        @include('alunos.form')
        
        <button type="submit" class="btn btn-success">Atualizar Aluno</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection