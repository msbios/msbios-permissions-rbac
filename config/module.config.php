<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Permissions\Rbac;

return [
    Module::class => [

        'role_provider' => RoleProvider::class,

        'role_resolvers' => [
            Resolver\StaticResolver::class => 100
        ]
    ]
];
