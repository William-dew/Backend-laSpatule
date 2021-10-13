<?php

namespace LaSpatule\Rest;

class RestFields
{

    static public function registerfields()
    {
        // Récupération de l'URL de l'image mise en avant
        register_rest_field(
            'recipe',
            'featured_media_url',
            [
                'get_callback' => function () {
                    return get_the_post_thumbnail_url();
                }
                // 'update_callback' =>
            ]
        );

        // Récupération de la date formatté
        register_rest_field(
            'recipe',
            'formatted_date',
            [
                'get_callback' => function () {
                    return get_the_date();
                }
            ]
        );

        // Récupération du nom de l'auteur de la recette
        register_rest_field(
            'recipe',
            'author_name',
            [
                'get_callback' => function () {
                    return get_the_author();
                }
            ]
        );
    }
}
