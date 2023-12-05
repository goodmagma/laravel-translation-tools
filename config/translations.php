<?php
return [

    // Directories to search in.
    'directories'=> [
        'app',
        'resources',
    ],
    
    // Directories to exclude from search.
    //
    // Please note, these directories should be relative to the ones listed in 'directories'.
    // For example, if you have 'resources' in 'directories', then to ignore the 'views/ignored' directory,
    // you need to add 'ignored' to the 'excluded-directories' list.
    'excluded-directories'=> [
    ],
    
    // File Patterns to search for.
    'patterns'=> [
        '*.php',
        '*.js',
    ],
    
    // Translation function names or a custom transform function.
    // Example of a custom transform function:
    // 'transform' => fn ($s) => \strtoupper(\str_replace(["-","_"], " ", $s))
    // If your function name contains $ escape it using \$ .
    'functions'=> [
        '__',
        '_t',
        '@lang',
    ],
    
    // Indicates whether you need to sort the translations alphabetically
    // by original strings (keys).
    // It helps navigate a translation file and detect possible duplicates.
    'sort-keys' => true,
    
    // Indicates whether you need to put untranslated strings
    // at the top of a translation file.
    // The criterion of whether a string is untranslated is
    // if its key and value are equivalent.
    // If sorting is enabled, untranslated and translated strings are sorted separately.
    'untranslated-strings-at-the-top' => false,
];