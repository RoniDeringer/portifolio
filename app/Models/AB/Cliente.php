<?php

namespace App\Models\AB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $fillable = [
        'id',
        'nome',
        'codigo',
        'cidade',
        'fk_site',
        'created_at',
        'updated_at',
    ];

    /**
     * Relacionamento: Cliente pertence a um Site.
     */
    public function site()
    {
        return $this->belongsTo(Site::class, 'fk_site');
    }
}
