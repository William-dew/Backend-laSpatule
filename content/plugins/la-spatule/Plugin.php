<?php

namespace LaSpatule;

class Plugin
{
    public static function run()

    {
        register_activation_hook(LA_SPATULE_PLUGIN_FILE, ['LaSpatule\Taxonomy\IngredientTaxonomy', 'addAdminCapabilities']);
        register_activation_hook(LA_SPATULE_PLUGIN_FILE, ['LaSpatule\Role\ChefRole', 'add']);
        register_deactivation_hook(LA_SPATULE_PLUGIN_FILE,['LaSpatule\Role\ChefRole','remove']);

        // activation du cpt RecipePostType et des métadonnées
        add_action('init', ['LaSpatule\PostType\RecipePostType', 'register']);
        add_action('rest_api_init', ['LaSpatule\Rest\RestFields', 'RegisterfeaturedmediaField']);
        add_action('init', ['LaSpatule\Taxonomy\IngredientTaxonomy', 'register']);
        add_action('init', ['LaSpatule\Taxonomy\TypeTaxonomy', 'register']);

    }
}
