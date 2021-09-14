<?php

namespace LaSpatule\PostType;

class PostType
{
    static public function register()
    {
        // static:: permet de récupérer une méthode statique ou une constante (depuis la classe fille)
        $labels = static::POST_TYPE_LABELS;
        $menu_icon = static::POST_TYPE_ICON;

        register_post_type(
            static::POST_TYPE_KEY,
            [
                'labels' => $labels,
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => $menu_icon,
                'show_in_rest' => true,
                'supports' => [
                    'title',
                    'editor',
                    'thumbnail',
                    'custom-fields',
                    'comments',
                    'excerpt'
                ]
            ]
        );
    }
}
