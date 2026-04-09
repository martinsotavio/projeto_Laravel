@csrf

<label for="nome">Nome do curso</label>
<input
    type="text"
    id="nome"
    name="nome"
    {{-- Old mantem o que foi digitado quando ocorrer erro (Não obrigatório) --}}
    value="{{ old('nome', $curso->nome ?? '') }}"
    required
>

<label for="descricao">Descricao</label>
<textarea
    id="descricao"
    name="descricao"
    rows="5"
    required
>{{ old('descricao', $curso->descricao ?? '') }}</textarea>

<button type="submit" class="btn">{{ $buttonText ?? 'Salvar' }}</button>
<a href="{{ route('cursos.index') }}" style="margin-left: 8px;">Cancelar</a>


<div class="mb-3">
    <label for="semestre_id" class="form-label">Semestre</label>
    <select name="semestre_id" id="semestre_id" class="form-control" required>
        <option value="">Selecione um semestre</option>
        @foreach($semestres as $semestre)
            <option value="{{ $semestre->id }}" 
                {{ old('semestre_id', $curso->semestre_id ?? '') == $semestre->id ? 'selected' : '' }}>
                {{ $semestre->nome }}
            </option>
        @endforeach
    </select>
</div>
