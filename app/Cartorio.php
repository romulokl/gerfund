<?php

namespace fundiario;

use Illuminate\Database\Eloquent\Model;

class Cartorio extends Model
{
    protected $table = 'tb_cartorio';

    protected $fillable  = ('nome', 'tabeliao', 'telefone', 'email');

    public function propriedade(){
    	return $this->hasMany('fundiario\Propriedade');
    }
}
