<?php
/**
 * Documenters configuration includes header and virtual namespace for virtual documentation
 * generated by spiral to help IDE understand runtime schemas.
 */
return [
    'header'    => [
        "This file was generated automatically by Spiral Framework as set of shortcuts to help IDE.",
        "Never include this file into your project.",
        "",
        "@ignore"
    ],
    'namespace' => 'VirtualClasses',
    'phpstorm'  => [
        'orm' => directory('runtime') . 'virtual-orm.php',
        'odm' => directory('runtime') . 'virtual-odm.php'
    ]
];