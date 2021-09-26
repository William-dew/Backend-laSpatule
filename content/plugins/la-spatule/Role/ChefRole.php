<?php

namespace LaSpatule\Role;

class ChefRole extends Role
{
    const ROLE_KEY = 'chef';
    const ROLE_NAME = 'Chef Cuisinier';
    const ROLE_CAPABILITIES = [
        'manage_options' => true,
        'moderate_comments' => true,
        'edit_comment' => true,
        'manage_categories' => true,
        'manage_links' => true,
        'upload_files' => true,
        'import' => true,
        'create_posts' => true,
        'edit_posts' => true,
        'edit_others_posts' => true,
        'edit_published_posts' => true,
        'publish_posts' => true,
        'read' => true,
        'delete_posts' => true,
        'delete_others_posts' => true, 
        'delete_published_posts' => true,
        'delete_private_posts' => true,
        'edit_private_posts' => true,
        'read_private_posts' => true,
        // users
        'delete_users' => true,
        'create_users' => true,
        'promote_users' => true,
        'list_users' => true,
        'remove_users' => true,
        'edit_users' => true,
        //
        'unfiltered_upload' => true,
        'export' => true,
        // taxonomies
        'assign_terms' => true,
        'manage_ingredients' => true,
        'edit_ingredients' => true,
        'delete_ingredients' => true,
        'assign_ingredients' => true,
        'manage_types' => true,
        'edit_types' => true,
        'delete_types' => true,
        'assign_types' => true,

    ];
}
