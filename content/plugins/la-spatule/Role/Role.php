<?php

namespace LaSpatule\Role;

class Role
{

    static public function add()
    {
        add_role(
            static::ROLE_KEY,
            static::ROLE_NAME,
            static::ROLE_CAPABILITIES


        );
    }

    static public function remove()
    {
        remove_role(static::ROLE_KEY);
    }
}
