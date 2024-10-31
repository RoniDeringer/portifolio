<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'funcionario';

    protected $fillable = [
        'nome',
        'fk_users',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_users');
    }

    public function transacoes()
    {
        return $this->hasMany(Transacao::class, 'fk_funcionario');
    }
}
