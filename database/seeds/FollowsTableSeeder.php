<?php

use Illuminate\Database\Seeder;
use App\Models\Follow;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2; $i <= 50; $i++) {
            Follow::create([
                'following_id' => 1,
                'followed_id' => $i
            ]);
        }
    }
}
