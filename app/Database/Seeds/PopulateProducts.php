<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PopulateProducts extends Seeder
{
	public function run()
	{
        $faker=Factory::create();

        for ($i=0;$i<100;$i++){
            $data= [
                'title'=>$faker->words(2,true),
                'description'=>$faker->words(50,true),
                'price'=>$faker->randomFloat(1,0,50),
            ];

            $this->db->table('products')->insert($data);
        }
	}
}
