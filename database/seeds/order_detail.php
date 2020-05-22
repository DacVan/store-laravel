<?php

use Illuminate\Database\Seeder;

class order_detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_detail')->delete();
        DB::table('order_detail')->insert([
            ['OrderID'=>1,'ProID'=>1,'OrdQuantity'=>1,'OrdPrice'=>50000],
            ['OrderID'=>1,'ProID'=>2,'OrdQuantity'=>1,'OrdPrice'=>60000],
            ['OrderID'=>2,'ProID'=>3,'OrdQuantity'=>1,'OrdPrice'=>70000],

        ]);
    }
}
