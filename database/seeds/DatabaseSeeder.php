<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(users::class);
        $this->call(category::class);
        $this->call(product::class);
        $this->call(payment_method::class);
        $this->call(order::class);
        $this->call(order_detail::class);
        $this->call(feedback::class);
    }
}
