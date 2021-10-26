<?php

namespace LaSpatule\Taxonomy;

class IngredientTaxonomy extends Taxonomy
{
    const TAXONOMY_KEY = 'ingredient';

    const REST_BASE = self::TAXONOMY_KEY;

    const HIERARCHICAL = false;


    const TAXONOMY_LABELS = [
        'name'                          => 'Ingredients',
        'singular_name'                 => 'Ingredient',
        'all_items'                     => 'Tous les ingrédients',
        'edit_item'                     => 'Modifier un ingrédient',
        'add_new_item'                  => 'Ajouter un nouvel ingrédient',
        'search_items'                  => 'Rechercher des ingrédients',
        'separate_items_with_commas'    => 'Séparer les ingrédients avec une virgule'

    ];

    const CAPABILITIES = [
        'manage_terms'  => 'manage_ingredients',
        'edit_terms'    => 'edit_ingredients',
        'delete_terms'  => 'delete_ingredients',
        'assign_terms'  => 'assign_ingredients'
    ];
}
