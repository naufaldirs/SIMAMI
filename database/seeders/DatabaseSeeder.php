<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Naufaldi Ramadhan',
            'username' => 'naufaldirs',
            'email' => 'naufaldiramadhan@gmail.com',
            'password' => bcrypt('12345')

        ]);
        // User::create([
        //     'name' => 'Novrylianto Zundi R',
        //     'email' => 'novry@gmail.com',
        //     'password' => bcrypt('1234')

        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur tempore reprehenderit ratione alias aspernatur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur tempore reprehenderit ratione alias aspernatur repudiandae nostrum laboriosam veritatis doloribus at sunt architecto, tenetur qui esse quidem? Provident nisi vel molestiae cupiditate at similique expedita temporibus sunt ducimus. Non fuga ipsum nemo ad obcaecati consequuntur similique dolorem quaerat animi perferendis temporibus voluptates corporis dolorum doloremque facilis, suscipit modi error voluptas, a facere ut quod quisquam! Dolor consequatur similique facilis iste quibusdam? Architecto debitis facilis possimus consequuntur temporibus quaerat unde tempore blanditiis magnam eum rerum iste incidunt corporis saepe harum expedita nihil dolores cum quisquam, at vel. Ipsam alias at impedit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur tempore reprehenderit ratione alias aspernatur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur tempore reprehenderit ratione alias aspernatur repudiandae nostrum laboriosam veritatis doloribus at sunt architecto, tenetur qui esse quidem? Provident nisi vel molestiae cupiditate at similique expedita temporibus sunt ducimus. Non fuga ipsum nemo ad obcaecati consequuntur similique dolorem quaerat animi perferendis temporibus voluptates corporis dolorum doloremque facilis, suscipit modi error voluptas, a facere ut quod quisquam! Dolor consequatur similique facilis iste quibusdam? Architecto debitis facilis possimus consequuntur temporibus quaerat unde tempore blanditiis magnam eum rerum iste incidunt corporis saepe harum expedita nihil dolores cum quisquam, at vel. Ipsam alias at impedit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-Tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur tempore reprehenderit ratione alias aspernatur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur tempore reprehenderit ratione alias aspernatur repudiandae nostrum laboriosam veritatis doloribus at sunt architecto, tenetur qui esse quidem? Provident nisi vel molestiae cupiditate at similique expedita temporibus sunt ducimus. Non fuga ipsum nemo ad obcaecati consequuntur similique dolorem quaerat animi perferendis temporibus voluptates corporis dolorum doloremque facilis, suscipit modi error voluptas, a facere ut quod quisquam! Dolor consequatur similique facilis iste quibusdam? Architecto debitis facilis possimus consequuntur temporibus quaerat unde tempore blanditiis magnam eum rerum iste incidunt corporis saepe harum expedita nihil dolores cum quisquam, at vel. Ipsam alias at impedit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
