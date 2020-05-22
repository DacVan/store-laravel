<?php

use Illuminate\Database\Seeder;

class order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->delete();
        DB::table('order')->insert(
            [
                ['OrderID'=>1,'OrderCustomer'=>'Nguyễn Đắc Văn','OrderAddress'=>'Bắc Cạn','OrderPhone'=>'03658879942','OrderDate'=>now(),'OrderTotal'=>110000,'OrderStatus'=>1,'PayID'=>1],
                ['OrderID'=>2,'OrderCustomer'=>'Đặng Thị Thư','OrderAddress'=>'Bắc Ninh','OrderPhone'=>'03564478214','OrderDate'=>now(),'OrderTotal'=>110000,'OrderStatus'=>1,'PayID'=>1],
                ['OrderID'=>3,'OrderCustomer'=>'Trần Minh Tuấn','OrderAddress'=>'Ninh Bình','OrderPhone'=>'03214789547','OrderDate'=>now(),'OrderTotal'=>110000,'OrderStatus'=>0,'PayID'=>1],

            ]
        );
    }
}
