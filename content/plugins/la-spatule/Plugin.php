<?php

namespace LaSpatule;

use LaSpatule\PostType\RecipePostTYpe;
use LaSpatule\Role\ChefRole;
use LaSpatule\Taxonomy\IngredientTaxonomy;
use LaSpatule\Taxonomy\TypeTaxonomy;

class Plugin
{
    public static function run()

    {
        add_action('init', [self::class, 'onPluginActivation']);
        register_deactivation_hook(LA_SPATULE_PLUGIN_FILE, [self::class, 'onPluginDeactivation']);

        add_action('rest_api_init', ['LaSpatule\Rest\RestFields', 'RegisterfeaturedmediaField']);
    }

    static public function onPluginActivation()
    {
        // activation du cpt RecipePostType et des métadonnées
        RecipePostTYpe::register();

        // activation de la taxonomie ingredient et ajout des capacités au role administrateur
        IngredientTaxonomy::register();
        IngredientTaxonomy::addAdminCapabilities();

        // activation de la taxonomie type et ajout des capacités au role administrateur
        TypeTaxonomy::register();
        TypeTaxonomy::addAdminCapabilities();

        // Ajout du role chef
        ChefRole::add();
    }

    static public function onPluginDeactivation()
    {
        ChefRole::remove();
        IngredientTaxonomy::removeAdminCapabilities();
        TypeTaxonomy::removeAdminCapabilities();
    }
}
