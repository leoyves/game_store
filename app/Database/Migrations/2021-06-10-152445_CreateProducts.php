<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProducts extends Migration
{
	public function up()
	{
	    $this->forge->addField([
	       'id'=>[
	           'type'=>'INT',
               'constraint'=>11,
               'unsigned'=>true,
               'auto_increment'=>true,
           ],
            'title'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,

            ],
            'description'=>[
                'type'=>'TEXT',
                'null'=>true,

            ],
            'price'=>[
                'type'=>'DECIMAL',
                'constraint'=>'10.2',

            ],
        ]);

//	    on renseigne la cle
	    $this->forge->addKey('id');

	    $this->forge->createTable('products');


	}

	public function down()
	{
	    $this->forge->dropTable('products');
	}
}
