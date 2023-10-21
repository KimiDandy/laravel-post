<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Kimi Dandy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur asperiores amet possimus eveniet quod quisquam. Iusto quas officia recusandae velit culpa fugiat illum maiores provident ad optio dignissimos id, quia atque iste, vitae mollitia architecto? Iure tempore vero vel est! Quis hic maxime quam. Optio voluptatem nam earum alias, voluptates similique esse blanditiis eum? Quos reiciendis ab, voluptatum, dicta animi, sapiente est consectetur at iste et nesciunt magni enim! Repellendus, ratione ipsam ipsa at sunt officiis culpa quas voluptatem quos?"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Keiro Dandy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum adipisci natus quia? Doloribus, quibusdam, iusto magnam nobis natus enim ipsum veniam nulla officia adipisci exercitationem impedit, neque voluptate necessitatibus hic. Assumenda reprehenderit blanditiis impedit sed consequuntur suscipit aperiam tenetur magni animi porro. Obcaecati necessitatibus quis dolorum, odit laborum perspiciatis est modi unde quisquam nihil corrupti fuga ea quibusdam numquam totam quos reprehenderit ipsa laboriosam officiis laudantium nemo sint vitae! Eum expedita dolor, ad eligendi nihil maiores quaerat. Nam ab a quae vero rem non, reiciendis cupiditate et necessitatibus veritatis perferendis consequuntur debitis quam sed quos reprehenderit voluptatibus iure ad aliquid!"
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
