<?php

namespace LaSpatule;

class Plugin
{
    public static function run()

    {
        // activation du cpt RecipePostType et des métadonnées
        add_action('init', ['LaSpatule\PostType\RecipePostType', 'register']);
        add_action('rest_api_init', ['LaSpatule\Rest\RestFields', 'RegisterfeaturedmediaField']);
    }
}
