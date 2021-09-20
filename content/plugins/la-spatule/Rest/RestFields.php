<?php

namespace LaSpatule\Rest;

class RestFields
{

    static public function registerfeaturedmediaField()
    {

        register_rest_field(
            'recipe',
            'featured_media_url',
            [
                'get_callback' => [self::class, 'getFeaturedMediaUrl']
                // 'update_callback' =>
            ]
        );
    }

    static public function getFeaturedMediaUrl($post)
    {
        // print_r($post);
        return get_the_post_thumbnail_url($post['id']);
    }
}
