<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'mo aued',
            'email' => 'engmostafaaued31@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456789', // password
            'approved' => 1

        ]);

        factory(Admin::class,9)->create();
    }
}
