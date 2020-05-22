<?php

use Illuminate\Database\Seeder;

class payment_method extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_method')->delete();
        DB::table('payment_method')->insert([
            ['PayID'=>1,'PayType'=>'Thanh toán khi nhận hàng(COD)'],
            ['PayID'=>2,'PayType'=>'Thanh toán online'],
        ]);
    }
}
