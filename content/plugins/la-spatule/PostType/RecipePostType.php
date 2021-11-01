<?php

namespace LaSpatule\PostType;

class RecipePostType
{
    const LABELS = [
        'name' => 'Recettes',
        'singular_name' => 'Recette',
        'edit_item' => 'Modifier une recette',
        'search_items' => 'Rechercher une recette',
        'add_new' => 'Ajouter une recette'
    ];

    // array des meta à déclarer
    const POST_TYPE_META_KEYS = [
        'temps_de_preparation',
        'temps_de_cuisson',
        'nombre_de_personne',
        'cout',
        'sous_titre'
    ];

    static public function register()
    {
        register_post_type(
            'recipe',
            [
                'labels' => self::LABELS,
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => 'dashicons-carrot',
                'show_in_rest' => true,
                'supports' => [
                    'title',
                    'editor',
                    'author',
                    'thumbnail',
                    'custom-fields',
                    'trackbacks',
                    'page-attributes',
                    'comments',
                    'revisions',
                    'excerpt',
                ]
            ]
        );
        foreach (self::POST_TYPE_META_KEYS as $meta_key) {
            register_post_meta(
                'recipe',
                $meta_key,
                [
                    'show_in_rest' => true,
                    'single' => true,
                ]
            );
        }
    }
}
