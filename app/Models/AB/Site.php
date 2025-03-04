<?php

namespace App\Models\AB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $table = 'site';

    protected $fillable = [
        'id',
        'url',
        'data_center',
        'status',

        'created_at',
        'updated_at',
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'fk_site');
    }
}
