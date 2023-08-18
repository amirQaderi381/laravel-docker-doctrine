
<?php
return [
    // Paths to the migration directories
    'migrations_paths' => [
        'DoctrineMigrations' => base_path('database/migrations'),
    ],
    'table_storage' => [
        'table_name' => 'doctrine_migration_versions',
        'version_column_name' => 'version',
        'version_column_length' => 1024,
        'executed_at_column_name' => 'executed_at',
        'execution_time_column_name' => 'execution_time',
    ],

    'all_or_nothing' => true,
    'check_database_platform' => true,
];


