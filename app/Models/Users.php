<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
	    'login','password'
    ];

	protected $validationRules =[
	    'login'=>'required|valid_email',
	    'password'=>'required|min_length[10]',

    ];

	protected $createdField= 'create_at';

	protected $beforeInsert=['hashPassword'];
	protected $beforeUpdate=['hashPassword'];

    /**
     * @param array $data
     * @return array
     */

	protected function hashPassword(array $data){
	    if (!isset($data['data']['password'])){
	        return $data;
        }
        $data['data']['password']= password_hash($data['data']['password'],PASSWORD_DEFAULT);
	    return $data;
    }


}
