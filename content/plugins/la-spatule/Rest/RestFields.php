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

        // Récupération du nom du type de plat
        register_rest_field(
            'recipe',
            'type_recipe',
            [
                'get_callback' => function ($post) {
                    $term =  get_term($post['recipe_type'][0]);
                    return $term->name;
                }
            ]
        );

        // creation route pour récupérer données table custom
        register_rest_route('laspatule/v1', '/note', [
            'methods' => 'GET',
            'callback' => function () {
                global $wpdb;
                $sql = "SELECT * FROM `sp_note`";
                return $wpdb->get_results($sql);
            }
        ]);

        register_rest_route('laspatule/v1', '/note', [
            'methods' => 'POST',
            'callback' => function ($request) {
                global $wpdb;
                $name = $request['premier params'];
                $sql = "INSERT INTO `sp_note` VALUES ('','$name', 'toto','30') ";
                $wpdb->query($sql);
                echo ($request['premier params']);
            }
        ]);
    }
}
