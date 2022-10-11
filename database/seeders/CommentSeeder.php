<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => 2,
            'post_id'=>1,
            'name' => 'username',
            'body' => 'First Comment',
        ]);
        DB::table('comments')->insert([
            'user_id' => 2,
            'post_id'=>2,
            'name' => 'username',
            'body' => 'Second Comment',
        ]);
    }
}
