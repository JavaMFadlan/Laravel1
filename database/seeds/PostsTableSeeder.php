<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['title'=>'Contoh Title 1','content'=>'lorem ipsum'],
        ['title'=>'Contoh Title 2','content'=>'lorem ipsum'],
        ['title'=>'Contoh Title 3','content'=>'lorem ipsum']
    ];
    DB::table('posts')->insert($posts);
    }
}