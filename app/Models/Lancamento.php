<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'item',
        'preco',
        'data',
        'genero',
        'e_provento'
    ];

    public $timestamps = false;
}
