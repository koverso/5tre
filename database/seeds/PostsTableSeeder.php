<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            Post::create([
                'user_id'    => $i,
                'content'    => 'これはテスト投稿' .$i.'これはテスト投稿' .$i.'これはテスト投稿' .$i.'これはテスト投稿' .$i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
