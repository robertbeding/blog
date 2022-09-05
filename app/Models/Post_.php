<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Robert Beding",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, voluptatum voluptate. Fugiat,
            exercitationem? Molestias aperiam minima hic amet perspiciatis iste nobis iure! Consectetur officiis molestias nulla amet et
            commodi laborum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rosa Fadila",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat repellat enim incidunt labore, vitae aliquam illum
            non rerum blanditiis iste temporibus asperiores totam quo. Rem cum quae ex vitae consequuntur, blanditiis
            omnis sed, commodi, officiis velit recusandae atque fugit ratione dolores! Maiores esse voluptates fugiat rerum tempora alias dolore, error eos illo, in,  aliquam dolor pariatur! Perferendis praesentium expedita voluptatem.
            Nemo cupiditate, exercitationem similique tempora quam laboriosam sit harum illo."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
