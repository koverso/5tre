<?php

use Illuminate\Database\Seeder;
use App\Models\Reply;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            Reply::create([
                'user_id' => $i,
                'comment_id' => $i,
                'content' => 'これはテストリプライ' .$i.'これはテストリプライ' .$i.'これはテストリプライ' .$i.'これはテストリプライ' .$i.'これはテストリプライ' .$i.'これはテストリプライ' .$i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
