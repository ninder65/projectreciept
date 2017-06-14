<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class fakedata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ///

        $faker = Faker\factory::create();

        DB::table('user')->insert([
            'id'=>'1',
            'firstname' => "Test",
            'lastname' => "Test",
            'phone' => "289-200-0165",
            'email' => "test@gmail.com",
            'password' => "zxcv1234",
            'created_at' => '2016-06-05 00:00:00',
            'updated_at' => '2016-06-05 00:00:00'
        ]);


        DB::table('tbl_categories')->insert([
            'id'=>'1',
            'cname' => str_random(10),
            'datetime' => '2016-06-05 00:00:00',
        ]);

        DB::table('tbl_reciepts')->insert([
            'id'=>"1",
            'vendor_id' => "1",
            'items_total_cost' => "10",
            'date' => '2016-06-05 00:00:00',
            'pic'=>'pic',
            'user_id'=>'1',


        ]);

        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {


            DB::table('tbl_items')->insert([
                    'iname' => str_random(10),
                    'iquantity' => "10",
                    'itotal' => "10",
                    'reciept_id'=>'1',
                    'categories_id'=>"1",


            ]);


        }

    }
}