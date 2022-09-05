<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Robert Beding',
        //     'email' => 'robertbeding@yahoo.com',
        //     'password' => bcrypt('123456')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programing',
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);


        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Post::factory(10)->create();

    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi aperiam expedita ex, similique quisquam repudiandae fuga praesentium dolorem repellendus sapiente aut',
    //         'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi aperiam expedita ex, similique quisquam repudiandae fuga praesentium dolorem repellendus sapiente aut fugiat eius laudantium minima provident eligendi veniam, suscipit quae magni eveniet quam illum earum quos? Alias sint minus placeat ipsam itaque modi architecto ipsum officia similique sapiente eaque fugiat tempora, veritatis maxime illo? Tenetur enim aliquid nobis, dolorem omnis esse praesentium voluptates inventore nesciunt recusandae id temporibus vel officiis excepturi
    //         commodi facere dolorum rerum iure nemo provident voluptas odio. Blanditiis ex iusto nobis quasi, maxime deserunt quos delectus ad, consequuntur qui illo est obcaecati voluptatibus quo, neque iure! Esse.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Kedua',
    //         'slug' => 'judul-kedua',
    //         'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi aperiam expedita ex, similique quisquam repudiandae fuga praesentium dolorem repellendus sapiente aut',
    //         'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi aperiam expedita ex, similique quisquam repudiandae fuga praesentium dolorem repellendus sapiente aut fugiat eius laudantium minima provident eligendi veniam, suscipit quae magni eveniet quam illum earum quos? Alias sint minus placeat ipsam itaque modi architecto ipsum officia similique sapiente eaque fugiat tempora, veritatis maxime illo? Tenetur enim aliquid nobis, dolorem omnis esse praesentium voluptates inventore nesciunt recusandae id temporibus vel officiis excepturi
    //         commodi facere dolorum rerum iure nemo provident voluptas odio. Blanditiis ex iusto nobis quasi, maxime deserunt quos delectus ad, consequuntur qui illo est obcaecati voluptatibus quo, neque iure! Esse.',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Ketiga',
    //         'slug' => 'judul-ketiga',
    //         'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi aperiam expedita ex, similique quisquam repudiandae fuga praesentium dolorem repellendus sapiente aut',
    //         'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi aperiam expedita ex, similique quisquam repudiandae fuga praesentium dolorem repellendus sapiente aut fugiat eius laudantium minima provident eligendi veniam, suscipit quae magni eveniet quam illum earum quos? Alias sint minus placeat ipsam itaque modi architecto ipsum officia similique sapiente eaque fugiat tempora, veritatis maxime illo? Tenetur enim aliquid nobis, dolorem omnis esse praesentium voluptates inventore nesciunt recusandae id temporibus vel officiis excepturi
    //         commodi facere dolorum rerum iure nemo provident voluptas odio. Blanditiis ex iusto nobis quasi, maxime deserunt quos delectus ad, consequuntur qui illo est obcaecati voluptatibus quo, neque iure! Esse.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Keempat',
    //         'slug' => 'judul-keempat',
    //         'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi aperiam expedita ex, similique quisquam repudiandae fuga praesentium dolorem repellendus sapiente aut',
    //         'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi aperiam expedita ex, similique quisquam repudiandae fuga praesentium dolorem repellendus sapiente aut fugiat eius laudantium minima provident eligendi veniam, suscipit quae magni eveniet quam illum earum quos? Alias sint minus placeat ipsam itaque modi architecto ipsum officia similique sapiente eaque fugiat tempora, veritatis maxime illo? Tenetur enim aliquid nobis, dolorem omnis esse praesentium voluptates inventore nesciunt recusandae id temporibus vel officiis excepturi
    //         commodi facere dolorum rerum iure nemo provident voluptas odio. Blanditiis ex iusto nobis quasi, maxime deserunt quos delectus ad, consequuntur qui illo est obcaecati voluptatibus quo, neque iure! Esse.',
    //         'category_id' => 3,
    //         'user_id' => 1
    //     ]);
    }
}
