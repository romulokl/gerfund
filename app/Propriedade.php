<?php

namespace fundiario;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    protected $table = 'td_propriedades';

	protected $fillable = array('denominacao', 'cep', 'logradouro', 'numero', 'quadra', 'bairro', 'distrito', 'municipio', 'estado', 'pais', 'proprietario', 'area', 'idt_registrado', 'numero_itr', 'numero_ccir', 'dt_geracao','cod_imovel', 'modulos_fiscais', 'num_autencidade', 'registro_car', 'dt_cadastro', 'area_rl', 'cod_cartorio', 'matricula', 'livro', 'folha');

	public function cartorio(){
		return $this->belongsTo('fundiario\Cartorio');
	}
}
