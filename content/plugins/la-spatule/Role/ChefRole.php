<?php

namespace LaSpatule\Role;

class ChefRole extends Role
{
    const ROLE_KEY = 'chef';
    const ROLE_NAME = 'Chef Cuisinier';
    const ROLE_CAPABILITIES = [
        'read'                      => true,
        'delete_posts'              => true,
        'delete_published_posts'    => true,
        'edit_posts'                => true,
        'manage_ingredients'        => true,
        'edit_ingredients'          => true,
        'delete_ingredients'        => true,
        'assign_ingredients'        => true,
        'upload_files'              => true,
        'publish_posts'             => true,
        'delete_published_posts'    => true,
    ];
}
