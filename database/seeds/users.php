<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            ['id'=>1,'email'=>'admin@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Nguyễn Đắc Văn','address'=>'Bắc Ninh','phone'=>'098999999','level'=>2],
            ['id'=>2,'email'=>'member@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Nguyễn Thành Công','address'=>'Hà Nội','phone'=>'0352264487','level'=>1],
            ['id'=>3,'email'=>'dacvan@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Đặng Thị Thư','address'=>'Hà Nam','phone'=>'0352193480','level'=>1],
        ]);
    }
}
