<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
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
        $types = [
          [
            'name' => 'F.A.Q',
            'desc' => 'acd',
            'slug' => 'f-a-q',
          ],
          [
            'name' => 'Sell Cvv Good Fresh & Cc Fullz Info',
            'desc' => 'sell-cvv-good-fresh-cc-fullz-info',
            'slug' => 'sell-cvv-good-fresh-cc-fullz-info',
          ],
          [
            'name' => 'Sell Dumps Track1 Track2',
            'desc' => 'Sell Dumps Track1 Track2',
            'slug' => 'sell-dumps-track1-track2',
          ],
          [
            'name' => 'Payment',
            'desc' => 'payment',
            'slug' => 'payment',
          ]
        ];
        DB::table('types')->insert($types);
    }
}
