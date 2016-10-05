<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Estabelecimento extends Model 
{
    
	protected $table = 'estabelecimentos';

	protected $maps = ['estabelecimento_nome' => 'nome', 'estabelecimento_descricao' => 'descricao'];


 
}
