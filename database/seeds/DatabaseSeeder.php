<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //自動生成十筆資料
        //在terminal /project 資料夾  執行 php artisan db:seed --class=DatabaseSeeder
        factory(User::class, 10)->create();
        

    }
}
