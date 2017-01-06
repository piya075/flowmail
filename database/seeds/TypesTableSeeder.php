<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert([
            'name' => 'Unlimited',
            'limit_email' => 9999,
            'limit_project' => 9999,
            'limit_customer'=>999999,
            'status'=>1
        ]);
        
        DB::table('types')->insert([
            'name' => 'Platinum',
            'limit_email' => 20,
            'limit_project' => 10,
            'limit_customer'=>3000,
            'status'=>1
        ]);
        
        DB::table('types')->insert([
            'name' => 'Gold',
            'limit_email' => 10,
            'limit_project' => 5,
            'limit_customer'=>1000,
            'status'=>1
        ]);
        
        DB::table('types')->insert([
            'name' => 'Silver',
            'limit_email' => 5,
            'limit_project' => 3,
            'limit_customer'=>500,
            'status'=>1
        ]);
        
        DB::table('types')->insert([
            'name' => 'Bronze',
            'limit_email' => 3,
            'limit_project' => 1,
            'limit_customer'=>100,
            'status'=>1
        ]);
    }
}
