<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class Products extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'products';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
	    'title','description','price'
    ];

	protected $validationRules=[
        'title'=>[
            'rules'=>'required|min_length[10]',
            'errors'=>[
                'required'=>'vous devez mettre le titre',
                'min_length'=>'le titre doit etre 10 caracteres min',
                ]
        ],
        'description'=>[
            'rules'=>'required|min_length[50]',
            'errors'=>[
                'required'=>'vous devez mettre la description',
                'min_length'=>'la description doit etre 50 caracteres min',
            ]
        ],
        'price'=>[
            'rules'=>'required|decimal',
            'errors'=>[
                'required'=>'vous devez mettre le prix',
                'min_length'=>'lprix doit etre un decimal',
            ]
        ],

    ];
	/**@return ValidationInterface
     */

	public function getValidation(): ValidationInterface {
	    return $this->validation;

    }






}
