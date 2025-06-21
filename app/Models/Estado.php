<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estado extends Model
{
    protected $table = 'estados';
    protected $primaryKey = 'sigla';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['sigla', 'nome', 'pais_codigo'];

        public function pais(): BelongsTo
    {
        return $this->belongsTo(Pais::class, 'pais_codigo', 'codigo');
    }
}
