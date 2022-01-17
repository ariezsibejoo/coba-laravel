<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => "Post Pertama",
            'slug' => 'post-pertama',
            'author' => 'Aris Setiawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere voluptate minima animi quia corporis cum natus sed, aliquam voluptatum assumenda aspernatur? Delectus hic quasi maxime amet ipsum minima impedit distinctio, quidem voluptatem vel molestiae quas. Ad fugiat nulla repellendus quia quo temporibus! Facilis aliquam iure error tempore adipisci quidem sunt. Est minima nesciunt molestias placeat eveniet consequatur dolore ut officia porro animi, accusamus sint illum repellat. Distinctio ad placeat corporis voluptatem omnis possimus vero? Debitis qui minus, aut asperiores quaerat natus pariatur cupiditate maiores nesciunt veniam reiciendis suscipit animi. Est exercitationem culpa ipsam eaque consequuntur inventore at quaerat nisi non.'
        ],
        [
            'title' => "Post Kedua",
            'slug' => 'post-kedua',
            'author' => 'Bejo Parjojo',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere voluptate minima animi quia corporis cum natus sed, aliquam voluptatum assumenda aspernatur? Delectus hic quasi maxime amet ipsum minima impedit distinctio, quidem voluptatem vel molestiae quas. Ad fugiat nulla repellendus quia quo temporibus! Facilis aliquam iure error tempore adipisci quidem sunt. Est minima nesciunt molestias placeat eveniet consequatur dolore ut officia porro animi, accusamus sint illum repellat. Distinctio ad placeat corporis'
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
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
