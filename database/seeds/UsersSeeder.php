<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $posts = [
        [
          'type_id' => 1,
          'title' => 'F.A.Q',
          'content' => 'f a q',
          'slug' => 'f-a-q'
        ],
        [
          'type_id' => 2,
          'title' => 'Sell Cvv Good Fresh & Cc Fullz Info',
          'content' => 'Sell Cvv Good Fresh & Cc Fullz Info',
          'slug' => 'sell-cvv-good-fresh-cc-fullz-info'
        ],
        [
          'type_id' => 3,
          'title' => 'Sell Dumps Track1 Track2',
          'content' => 'Sell Dumps Track1 Track2',
          'slug' => 'sell-dumps-track1-track2'
        ],
        [
          'type_id' => 4,
          'title' => 'Payment',
          'content' => 'payment',
          'slug' => 'payment'
        ]
      ];
      DB::table('posts')->insert($posts);
    }
}
