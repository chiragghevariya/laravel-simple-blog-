<?php

use App\Admin;
use Illuminate\Database\Seeder;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =new Admin();
        $admin->name ="admin";
        $admin->password =bcrypt("admin");
        $admin->save();
    }
}
