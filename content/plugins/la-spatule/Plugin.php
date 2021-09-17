<?php

namespace LaSpatule;

class Plugin
{
    public static function run()
    {
        // activation du cpt RecipePostType et des métadonnées
        add_action('init', ['LaSpatule\PostType\RecipePostType', 'register']);
    }
}
