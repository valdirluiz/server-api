<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Estabelecimento extends Model 
{
    
	protected $table = 'estabelecimentos';
 

	protected $hidden = [
        'estabelecimento_doc',
		'estabelecimento_logo',
        'estabelecimento_data_atualizacao',
        'estabelecimento_data_cadastro_pre',
		'estabelecimento_data_cadastro',
		'estabelecimento_telefone1',
		'estabelecimento_telefone2',
		'estabelecimento_chave',
        'estabelecimento_latitude',
        'estabelecimento_longitude',
		'estabelecimento_tipo',
		'estabelecimento_complemento',
 		'plano_id',
		'estabelecimento_site',
		'estabelecimento_fl_ativado',
		'estabelecimento_cep',
		'estabelecimento_descricao'
    ];


 
}
