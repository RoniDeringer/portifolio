<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transacao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transacao';

    protected $fillable = [
        'tipo',
        'valor',
        'data',
        'descricao',
        'fk_funcionario',
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'fk_funcionario');
    }
}
