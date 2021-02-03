<?php

use Illuminate\Database\Seeder;
use App\Enums\SettingType;

class AddedSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'id' => 7,
                'type' => SettingType::MetaTitle,
                'value' => 'Bếp Mẹ Sushi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('settings')->insert($settings);
    }
}
