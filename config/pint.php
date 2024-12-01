<?php

return [
    // Set the default preset (set of code style rules)
    'preset' => 'laravel', // Other options: 'psr12', 'default'

    // Exclude specific directories or files from formatting
    'exclude' => [
        'vendor',
        'node_modules',
        'public',
    ],

    // Max line length for breaking long lines
    'lineLength' => 120, // Default is 120

    // Enable or disable specific code formatting rules
    'rules' => [
        'array_syntax' => ['syntax' => 'short'], // Use short array syntax []
        'no_unused_imports' => true,  // Remove unused imports
        'single_blank_line_before_namespace' => true, // Single blank line before namespace
        'no_trailing_comma_in_list_call' => false, // Disable trailing commas in function calls
    ],
];
