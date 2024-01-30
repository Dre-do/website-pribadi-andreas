<?php

namespace App\Models;


class Blog
{
    private static $blog_posts = [
        [
        "title" => "Judul Tulisan Pertama", 
        "slug" => "judul-tulisan-pertama",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ex, sed provident molestiae consequatur animi autem dolores nobis iste a, labore facilis commodi recusandae corporis placeat quidem sequi ducimus dolore?"
        ],

        [
        "title" => "Judul Tulisan Kedua", 
        "slug" => "judul-tulisan-kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ex, sed provident molestiae consequatur animi autem dolores nobis iste a, labore facilis commodi recusandae corporis placeat quidem sequi ducimus dolore?"
        ],

        [
        "title" => "Judul Tulisan Ketiga", 
        "slug" => "judul-tulisan-ketiga",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ex, sed provident molestiae consequatur animi autem dolores nobis iste a, labore facilis commodi recusandae corporis placeat quidem sequi ducimus dolore?"
        ]

        ];

        public static function all() {
            return self::$blog_posts;
        }
}
