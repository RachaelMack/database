<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->truncate();

        $faker = Faker::create();
        $clients = [];
        foreach (range(1,20) as $index) {
          $clients[]=[
            'first_name'=>$faker->firstName,
            'last_name'=>$faker->lastName,
            'initial'=>$faker->randomLetter,
            'start_date'=>$faker->date,
            'date_recieved'=>$faker->date,
            'address'=>$faker->address,
            'city'=>$faker->city,
            'prov'=>$faker->stateAbbr,
            'p_code'=>$faker->postcode,
            'residence'=>$faker->company,
            'healthcard'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
            'sin'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
            'DOB'=>$faker->date,
            'prim_diagnosis'=>$faker->company,
            'sec_diagnosis'=>$faker->company,
            'family_doctor'=>$faker->name,
            'advocate'=>$faker->name,
            'phone'=>$faker->phoneNumber,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'special_instructions'=>$faker->sentence,
            'organization_id'=> rand(1, 3),
            'status'=>'full-time',
            'gender'=>'male',
          ];
        }

        DB::table('clients')->insert($clients);
    }
}
