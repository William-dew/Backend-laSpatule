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
        register_rest_field(
            'recipe',
            'formatted_date',
            [
                'get_callback'=>function(){
                return get_the_date();
            }
            ]
        );
    }

    static public function getFeaturedMediaUrl($post)
    {
        // print_r($post);
        // $post => objet courant sous la forme d'un array
        return get_the_post_thumbnail_url($post['id']);
    }
}
