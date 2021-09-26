<?php

namespace LaSpatule\Taxonomy;

class TypeTaxonomy extends Taxonomy
{
    const TAXONOMY_KEY = 'type';

    const REST_BASE = 'recipe_type';

    const TAXONOMY_LABELS = [
        'name'          => 'types de plat',
        'singular_name' => 'type de plat',
        'all_items'     => 'Tous les types de plat',
        'edit_item'     => 'Modifier un type de plat',
        'add_new_item'  => 'Ajouter un nouveau type de plat',
        'search_items'  => 'Rechercher des types de plat'

    ];

    const CAPABILITIES = [
        'manage_terms'  => 'manage_types',
        'edit_terms'    => 'edit_types',
        'delete_terms'  => 'delete_types',
        'assign_terms'  => 'assign_types'
    ];
}
