<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Belajar Membuat Komentar 1',
            'content' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);

        Post::create([
            'title' => 'Belajar Membuat Komentar 2',
            'content' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);


        Comment::create([
            'post_id' => 1,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);
        Comment::create([
            'post_id' => 1,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);
        Comment::create([
            'post_id' => 1,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);
        Comment::create([
            'post_id' => 1,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);
        Comment::create([
            'post_id' => 1,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);
        Comment::create([
            'post_id' => 2,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);


        Comment::create([
            'post_id' => 2,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);


        Comment::create([
            'post_id' => 2,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);


        Comment::create([
            'post_id' => 2,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);
        Comment::create([
            'post_id' => 1,
            'comment' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit'
        ]);


    }
}
