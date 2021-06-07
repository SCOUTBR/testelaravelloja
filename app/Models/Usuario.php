<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends RmModel
{
    protected $table = "usuario";
    protected $fillable = [ 'email', 'cpf', 'password', 'nome'];
}
