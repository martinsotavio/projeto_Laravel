@extends('layouts.app') {{-- Ou o nome do seu layout principal --}}

@section('content')
<div class="container">
    <h1>Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @include('alunos.form')
        
        <button type="submit" class="btn btn-primary">Salvar Aluno</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection