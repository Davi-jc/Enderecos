<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    protected $primaryKey = 'codigo';
    public $incrementing = true;
    protected $fillable = ['nome', 'sigla'];
}