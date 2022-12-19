<?php

namespace App\Models;



class Post 
{
 private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Naufaldi Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, debitis esse necessitatibus asperiores nisi natus quis. Magnam, natus veniam eveniet mollitia necessitatibus suscipit libero nulla sit? Blanditiis nihil vero eius sunt, earum laboriosam officiis corrupti itaque praesentium consequatur a animi quasi fugiat molestias quis, quibusdam cum? Tempore nihil amet possimus inventore, laborum sapiente iure cum recusandae reprehenderit libero ea veniam aut, repellat dolore dolores. Corrupti quibusdam, magnam illo ducimus neque porro quaerat molestiae nihil nemo cum ullam delectus necessitatibus dignissimos reiciendis facilis sunt itaque laborum ea dolorem, quam eveniet praesentium."
        ],
        [
            "title" => "Judul Post Naufal",
            "slug" => "judul-post-kedua",
            "author" => "Novry",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, debitis esse necessitatibus asperiores nisi natus quis. Magnam, natus veniam eveniet mollitia necessitatibus suscipit libero nulla sit? Blanditiis nihil vero eius sunt, earum laboriosam officiis corrupti itaque praesentium consequatur a animi quasi fugiat molestias quis, quibusdam cum? Tempore nihil amet possimus inventore, laborum sapiente iure cum recusandae reprehenderit libero ea veniam aut, repellat dolore dolores. Corrupti quibusdam, magnam illo ducimus neque porro quaerat molestiae nihil nemo cum ullam delectus necessitatibus dignissimos reiciendis facilis sunt itaque laborum ea dolorem."
        ]
        ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts -> firstWhere('slug', $slug);
    }
}
