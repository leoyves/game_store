<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
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
            'login'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,

            ],
            'password'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,

            ],
            'created_at'=>[
                'type'=>'TIMESTAMP',
                'null'=>true,

            ],

        ]);

//	    on renseigne la cle
        $this->forge->addKey('id');

        $this->forge->createTable('users');

    }

	public function down()
	{
        $this->forge->dropTable('users');
	}
}
