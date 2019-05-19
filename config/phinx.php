<?php
return [
    "paths" => [
        'migrations' => 'db/migrations'
    ],
    "environments" => [
        "default_migration_table" => "phinxlog",
        "default_database" => "p92",
        "development" => [
            "adapter" => "sqlite",
            "name" => './db/p92',
            "charset" => "utf8",
            "suffix" => ".db",
            //'memory' => true
        ]
    ]
];
