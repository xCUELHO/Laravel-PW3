<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = "tbCliente";
    protected $fillable = ['idCliente','nome','dtNasc','estadoCivil','endereco','numero','complemento','cep','cidade','estado','rg','cpf','email','fone','celular'];
    public $timestamps = false;
}
