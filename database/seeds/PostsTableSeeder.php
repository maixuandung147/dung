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
        //Cach 1
        // $data = [
        // 	[
        // 		'name'=>'post1',
        // 		'user_id'=>1
        // 	],
        // 	[
        // 		'name'=>'post2',
        // 		'user_id'=>2
        // 	],
        // ];
        // Post::insert($data);
        //Cach 2 goi file FACTORY
        factory(App\Post::class,20)->create();      // Post chính là tên ở PostFACTORY sau đó t qua DatabaseSeeder đe khai báo cho nó chạy ở hàm RUN
    }
}
