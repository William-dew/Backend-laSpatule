<?php

namespace LaSpatule\PostType;

class RecipePostType extends PostType
{
    const POST_TYPE_LABELS = [
        'name' => 'Recettes',
        'singular_name' => 'Recette',
        'edit_item' => 'Modifier une recette',
        'search_item' => 'Rechercher une recette'
    ];
    const POST_TYPE_ICON = 'dashicons-carrot';

    const POST_TYPE_KEY = 'recipe';

    // array des meta à déclarer
    const POST_TYPE_META_KEYS = [
        'temps_de_preparation',
        'temps_de_cuisson',
        'cout_par_personne',
        'nombre_de_personnes'
    ];
}
