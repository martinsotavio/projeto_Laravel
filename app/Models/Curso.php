<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Curso extends Model
{
    // fillable - Permite a inserção de informações em massa
    protected $fillable = [
        'nome',
        'descricao',
        'semestre_id', // Adicionado aqui para permitir salvar o ID do semestre
    ];

    /**
     * Relacionamento: Um curso pertence a um semestre.
     */
    public function semestre(): BelongsTo
    {
        return $this->belongsTo(Semestre::class);
    }
}