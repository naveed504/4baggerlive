<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stateArray = array(
            array('state_name' => 'Alabama', 'state_code' => 'AL'),
            array('state_name' => 'Alaska', 'state_code' => 'AK'),
            array('state_name' => 'Arizona', 'state_code' => 'AZ'),
            array('state_name' => 'Arkansas', 'state_code' => 'AR'),
            array('state_name' => 'California', 'state_code' => 'CA'),
            array('state_name' => 'Colorado', 'state_code' => 'CO'),
            array('state_name' => 'Connecticut', 'state_code' => 'CT'),
            array('state_name' => 'Delaware', 'state_code' => 'DE'),
            array('state_name' => 'District of Columbia', 'state_code' => 'DC'),
            array('state_name' => 'Florida', 'state_code' => 'FL'),
            array('state_name' => 'Georgia', 'state_code' => 'GA'),
            array('state_name' => 'Hawaii', 'state_code' => 'HI'),
            array('state_name' => 'Idaho', 'state_code' => 'ID'),
            array('state_name' => 'Illinois', 'state_code' => 'IL'),
            array('state_name' => 'Indiana', 'state_code' => 'IN'),
            array('state_name' => 'Iowa', 'state_code' => 'IA'),
            array('state_name' => 'Kansas', 'state_code' => 'KS'),
            array('state_name' => 'Kentucky', 'state_code' => 'KY'),
            array('state_name' => 'Louisiana', 'state_code' => 'LA'),
            array('state_name' => 'Maine', 'state_code' => 'ME'),
            array('state_name' => 'Maryland', 'state_code' => 'MD'),
            array('state_name' => 'Massachusetts', 'state_code' => 'MA'),
            array('state_name' => 'Michigan', 'state_code' => 'MI'),
            array('state_name' => 'Minnesota', 'state_code' => 'MN'),
            array('state_name' => 'Mississippi', 'state_code' => 'MS'),
            array('state_name' => 'Missouri', 'state_code' => 'MO'),
            array('state_name' => 'Montana', 'state_code' => 'MT'),
            array('state_name' => 'Nebraska', 'state_code' => 'NE'),
            array('state_name' => 'Nevada', 'state_code' => 'NV'),
            array('state_name' => 'New Hampshire', 'state_code' => 'NH'),
            array('state_name' => 'New Jersey', 'state_code' => 'NJ'),
            array('state_name' => 'New Mexico', 'state_code' => 'NM'),
            array('state_name' => 'New York', 'state_code' => 'NY'),
            array('state_name' => 'North Carolina', 'state_code' => 'NC'),
            array('state_name' => 'North Dakota', 'state_code' => 'ND'),
            array('state_name' => 'Ohio', 'state_code' => 'OH'),
            array('state_name' => 'Oklahoma', 'state_code' => 'OK'),
            array('state_name' => 'Oregon', 'state_code' => 'OR'),
            array('state_name' => 'Pennsylvania', 'state_code' => 'PA'),
            array('state_name' => 'Rhode Island', 'state_code' => 'RI'),
            array('state_name' => 'South Carolina', 'state_code' => 'SC'),
            array('state_name' => 'South Dakota', 'state_code' => 'SD'),
            array('state_name' => 'Tennessee', 'state_code' => 'TN'),
            array('state_name' => 'Texas', 'state_code' => 'TX'),
            array('state_name' => 'Utah', 'state_code' => 'UT'),
            array('state_name' => 'Vermont', 'state_code' => 'VT'),
            array('state_name' => 'Virginia', 'state_code' => 'VA'),
            array('state_name' => 'Washington', 'state_code' => 'WA'),
            array('state_name' => 'West Virginia', 'state_code' => 'WV'),
            array('state_name' => 'Wisconsin', 'state_code' => 'WI'),
            array('state_name' => 'Wyoming', 'state_code' => 'WY')
        );

        DB::table('states')->insert($stateArray);
    }
}
