<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Semestre; // 1. Importação necessária
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        // Usamos with('semestre') para evitar o problema de N+1 consultas no banco
        $cursos = Curso::with('semestre')
            ->latest()
            ->get();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        // 2. Carregar semestres para o select do formulário
        $semestres = Semestre::all();
        
        return view('cursos.create', compact('semestres'));
    }

    public function store(Request $request)
    {
        // 3. Adicionar semestre_id na validação
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string'],
            'semestre_id' => ['required', 'exists:semestres,id'],
        ]);

        Curso::create($dados);

        return redirect()
            ->route('cursos.index')
            ->with('success', 'Curso criado com sucesso.');
    }

    public function edit(Curso $curso)
    {
        // 4. Carregar semestres para a edição também
        $semestres = Semestre::all();
        
        return view('cursos.edit', compact('curso', 'semestres'));
    }

    public function update(Request $request, Curso $curso)
    {
        // 5. Adicionar semestre_id na validação do update
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string'],
            'semestre_id' => ['required', 'exists:semestres,id'],
        ]);

        $curso->update($dados);

        return redirect()
            ->route('cursos.index')
            ->with('success', 'Curso atualizado com sucesso.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()
            ->route('cursos.index')
            ->with('success', 'Curso removido com sucesso.');
    }
}