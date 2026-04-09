@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Disciplinas</h1>
        <a href="{{ route('disciplinas.create') }}" class="btn btn-primary">Nova Disciplina</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Carga Horária</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($disciplinas as $disciplina)
            <tr>
                <td>{{ $disciplina->id }}</td>
                <td>{{ $disciplina->nome }}</td>
                <td>{{ $disciplina->carga_horaria }}h</td>
                <td>{{ $disciplina->curso->nome ?? 'Sem curso' }}</td>
                <td class="d-flex">
                    <a href="{{ route('disciplinas.edit', $disciplina) }}" class="btn btn-sm btn-warning me-2">Editar</a>
                    <form action="{{ route('disciplinas.destroy', $disciplina) }}" method="POST" onsubmit="return confirm('Excluir disciplina?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection