@csrf
<div class="mb-3">
    <label for="nome" class="form-label">Nome Completo</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $aluno->nome ?? '') }}" required>
    @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $aluno->email ?? '') }}" required>
    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
</div>