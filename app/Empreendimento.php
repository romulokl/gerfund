<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empreendimento extends Model
{
    protected $table = 'tb_empreendimentos';

    protected $fillable = array('denominacao', 'tipo_intervencao', 'cep','logradouro', 'numero', 'quadra', 'bairro', 'distrito', 'municipio', 'estado', 'pais', 'descricao');
}
