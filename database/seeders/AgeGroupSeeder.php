<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ageGroupArray = array(
            array('age_group' => '5U'),
            array('age_group' => '6U'),
            array('age_group' => '7U'),
            array('age_group' => '8U'),
            array('age_group' => '9U'),
            array('age_group' => '10U'),
            array('age_group' => '11U'),
            array('age_group' => '12U'),
            array('age_group' => '13U'),
            array('age_group' => '14U'),
            array('age_group' => '15U'),
            array('age_group' => '16U'),
            array('age_group' => '17U'),
            array('age_group' => '18U'),          
        );

        DB::table('age_groups')->insert($ageGroupArray);
       
    }
}
