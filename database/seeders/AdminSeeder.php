<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'role_id' => 'a',
                'name' => 'Admin',
                'email' => 'admin@gmail.co.in',
                'password' => bcrypt(123456),
                'mobile' => '1234567890',
                'phone' => '1234567890',
            ],
        ];

        foreach ($user as $key => $value) {
            $find = User::where('email', $value['email'])->first();
            if (is_null($find)) {
                User::create($value);
            } else {
                User::where('id', $find->id)->update($value);
            }
        }
    }
}
