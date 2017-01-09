<?php

namespace fundiario;

use Illuminate\Database\Eloquent\Model;

class Cartorio extends Model
{
    protected $table = 'tb_cartorio';
    public $timestamps = false;

    protected $fillable  = array('nome', 'tabeliao', 'telefone', 'email', 'observacao');

    public function propriedade(){
    	return $this->hasMany('fundiario\Propriedade');
    }
}
