<?php

namespace LaSpatule\Taxonomy;

class Taxonomy
{

    static public function register()
    {
        $labels = static::TAXONOMY_LABELS;
        register_taxonomy(
            static::TAXONOMY_KEY,
            'recipe',
            [
                'labels'        => $labels,
                'show_in_rest'  => true,
                'public'        => true,
                'capabilities'  => static::CAPABILITIES,
                'hierarchical'  => true,
                'rest_base'     => static::REST_BASE,
            ],
        );
    }

    static public function addAdminCapabilities()
    {
        $adminRole = get_role('administrator');
        foreach (static::CAPABILITIES as  $key => $capability) {
            $adminRole->add_cap($capability);
        }
    }
 
}
