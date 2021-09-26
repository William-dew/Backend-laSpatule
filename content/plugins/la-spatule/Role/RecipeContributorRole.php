<?php

namespace LaSpatule\Role;

class RecipeContributorRole extends Role
{
    const ROLE_KEY = 'recipe-contributor';
    const ROLE_NAME = 'Contributeur';
    const ROLE_CAPABILITIES = [
        'read' => true,
        'edit_posts' => true,
        'upload_files' => true,
        'edit_other_posts' => true,
        'delete_posts' => true,
        // taxonomies
        'manage_ingredients' => false,
        'edit_ingredients' => true,
        'delete_ingredients' => false,
        'assign_ingredients' => true,
        'manage_types' => false,
        'edit_types' => false,
        'delete_types' => false,
        'assign_types' => true,

    ];
}
