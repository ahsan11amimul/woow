<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title'=>'Testing',
            'body' => 'This is Testing Post',
            
        ]);
        DB::table('posts')->insert([
            'user_id' => 1,
            'title'=>'another Testing',
            'body' => 'This is another Testing Post',
            
        ]);
    }
}
