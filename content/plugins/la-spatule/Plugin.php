<?php

namespace LaSpatule;

class Plugin
{
    public static function run()
    {
        // activation du cpt RecipePostType
        add_action('init', ['LaSpatule\PostType\RecipePostType', 'register']);
    }
}
