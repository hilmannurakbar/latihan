<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$posts =[
    	['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
    	['title'=>'haruskah menunda nikah ?', 'content'=>'lorem ipsum'],
    	['title'=>'membangun visi misi keluarga', 'content'=>'lorem ipsum']];
        // $this->call(UsersTableSeeder::class);
        DB::table('posts')->insert($posts);
    }
}
