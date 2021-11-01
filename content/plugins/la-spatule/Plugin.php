<?php

namespace LaSpatule;

use LaSpatule\Classes\Database;
use LaSpatule\PostType\RecipePostType;
use LaSpatule\Role\ChefRole;
use LaSpatule\Role\RecipeContributorRole;
use LaSpatule\Taxonomy\TypeTaxonomy;
use LaSpatule\Taxonomy\IngredientTaxonomy;

class Plugin
{
    public static function run()

    {
        add_action('init', [self::class, 'onPluginActivation']);
        register_deactivation_hook(LA_SPATULE_PLUGIN_FILE, [self::class, 'onPluginDeactivation']);

        add_action('rest_api_init', ['LaSpatule\Rest\RestFields', 'Registerfields']);
    }

    static public function onPluginActivation()
    {
        remove_role('contributor');
        // remove_role('author');
        // remove_role('editor');
        // remove_role('subscriber');



        // activation du cpt RecipePostType et des métadonnées
        RecipePostType::register();

        // activation de la taxonomie ingredient et ajout des capacités au role administrateur
        IngredientTaxonomy::register();
        IngredientTaxonomy::addAdminCapabilities();

        // activation de la taxonomie type et ajout des capacités au role administrateur
        TypeTaxonomy::register();
        TypeTaxonomy::addAdminCapabilities();

        // Ajout des roles
        ChefRole::add();
        RecipeContributorRole::add();

        // Création de la table custom
        Database::generateNotationRecipeTable();


        flush_rewrite_rules();
    }

    static public function onPluginDeactivation()
    {
        ChefRole::remove();
        RecipeContributorRole::remove();
        IngredientTaxonomy::removeAdminCapabilities();
        TypeTaxonomy::removeAdminCapabilities();
        Database::deleteNotationRecipeTable();

        flush_rewrite_rules();
    }
}
