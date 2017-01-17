<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    protected $table = 'tb_proprietarios';

    protected $fillable = array('nome', 'genero', 'rg', 'cpf','dt_nasc', 'naturalidade', 'possuiconjugue', 'nomeconjugue','rgconjugue', 'cpfconjugue', 'dt_nascconjugue', 'naturalidadeconjugue', 'contatoconjugue', 'cepconjugue', 'logradouroconjugue', 'numeroconjugue', 'quadraconjugue', 'bairroconjugue', 'distritoconjugue', 'municipioconjugue', 'estadoconjugue', 'paisconjugue', 'observacao');

}
