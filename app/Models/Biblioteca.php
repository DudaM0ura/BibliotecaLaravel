<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    use HasFactory;
    protected $table = 'bibliotecas';
    protected $fillable = ['titulo','autor','isbn','ano_lancamento'];
}
