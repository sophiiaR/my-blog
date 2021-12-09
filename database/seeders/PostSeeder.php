<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(300)->create();

        foreach ($posts as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);
            //a cada post le agrego 2 tags. Los tag_id son generados random (uno es un num entre 1 y 4, el otro entre 5 y 8)
            $post->tags()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }
    }
}
