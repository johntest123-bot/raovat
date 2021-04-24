<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $settings = [
        //     [
        //         'id' => 7,
        //         'type' => SettingType::MetaTitle,
        //         'value' => 'Bếp Mẹ Sushi',
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ],
        // ];
        // DB::table('settings')->insert($settings);
        $user = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        DB::table('users')->insert($user);
    }
}
