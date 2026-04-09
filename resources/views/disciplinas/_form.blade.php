@csrf
<div class="mb-3">
    <label for="nome" class="form-label">Nome da Disciplina</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $disciplina->nome ?? '') }}" required>
    @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="carga_horaria" class="form-label">Carga Horária (horas)</label>
    <input type="number" name="carga_horaria" id="carga_horaria" class="form-control" value="{{ old('carga_horaria', $disciplina->carga_horaria ?? '') }}" required>
    @error('carga_horaria') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="curso_id" class="form-label">Curso</label>
    <select name="curso_id" id="curso_id" class="form-control" required>
        <option value="">Selecione um curso</option>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}" 
                {{ old('curso_id', $disciplina->curso_id ?? '') == $curso->id ? 'selected' : '' }}>
                {{ $curso->nome }}
            </option>
        @endforeach
    </select>
    @error('curso_id') <div class="text-danger">{{ $message }}</div> @enderror
</div>