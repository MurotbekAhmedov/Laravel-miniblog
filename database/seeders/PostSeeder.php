<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20 ; $i++) {
            DB::table('posts')->insert([
                'category_id' => rand(1,10),
                'title' => 'Post '.$i,
                'description' => 'Description of post'.$i,
                'text' => '<p>You may execute the db:seed Artisan command to seed your database. By default, the db:seed command runs the Database\Seeders\DatabaseSeeder class, which may in turn invoke other seed classes. However, you may use the --class option to specify a specific seeder class to run individually:<br>'.$i.'</p>',
                'slug' => 'post-'.$i,
            ]);
        }
    }
}
