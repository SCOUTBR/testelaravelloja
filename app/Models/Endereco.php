<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends RmModel
{
    protected $table = "Endereco";
    protected $fillable = ['logradoro', 'numero', 'cidade','cep','complemento','estado'];
}
