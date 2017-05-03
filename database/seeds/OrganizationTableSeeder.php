<?php

use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->delete();

        $organizations = [
          ['id' => 1, 'name' => 'Horizon Achievement Centre', 'created_at'=> new DateTime, 'updated_at'=> new DateTime, 'address'=>'123 Fake Street', 'city'=>'Sydney', 'prov'=>'NS', 'p_code'=>'B1N2P7', 'phone'=>'9021234567'],
          ['id' => 2, 'name' => 'Haley Street Workshop', 'created_at'=> new DateTime, 'updated_at'=> new DateTime, 'address'=>'123 Fake Street', 'city'=>'Sydney', 'prov'=>'NS', 'p_code'=>'B1N2P7', 'phone'=>'9021234567'],
          ['id' => 3, 'name' => 'Resicare', 'created_at'=> new DateTime, 'updated_at'=> new DateTime, 'address'=>'123 Fake Street', 'city'=>'Sydney', 'prov'=>'NS', 'p_code'=>'B1N2P7', 'phone'=>'9021234567'],
        ];
        DB::table('organizations')->insert($organizations);
    }
}
