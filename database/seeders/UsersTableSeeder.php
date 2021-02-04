<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //填充50条数据
        User::factory()->count(50)->create();
        $user = User::find(1);
        $user->name = 'tql';
        $user->email = 'tql@qq.com';
        $user->is_admin= true;
        $user->password = bcrypt('123456');
        $user->save();
    }
}
