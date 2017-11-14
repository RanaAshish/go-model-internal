<?php

use Illuminate\Database\Seeder;

class ModelCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $des = [
        	'50plus Model (50-100 Jahre)',
        	'Baby Model (0-2 Jahre)',
        	'Fitness Model (18-100 Jahre)',
        	'Model Kids (2-15 Jahre)',
        	'Models (15-50 Jahre)',
        	'Plus Size Model (18-100 Jahre)'
        ];

        for($i = 0; $i < count($des); $i++){


        
        DB::table('model_categories')->insert([
        	
        	'description'=>$des[$i]
        ]);

    }
    }
}
