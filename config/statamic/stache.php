<?php

return [

    /*
    |--------------------------------------------------------------------------
    | File Watcher
    |--------------------------------------------------------------------------
    |
    | File changes will be noticed and data will be updated accordingly.
    | This can be disabled to reduce overhead, but you will need to
    | either update the cache manually or use the Control Panel.
    |
    */

    'watcher' => env('STATAMIC_STACHE_WATCHER', true),

    /*
    |--------------------------------------------------------------------------
    | Stores
    |--------------------------------------------------------------------------
    |
    | Here you may configure the stores that are used inside the Stache.
    |
    | https://statamic.dev/stache#stores
    |
    */

    'stores' => [
        
        'taxonomies' => [ // config
            'directory' => config_path('statamic_content/taxonomies'),
        ],

        'terms' => [ // content
            'directory' => base_path('content/taxonomies'),
        ],

        'collections' => [ // config
            'directory' => config_path('statamic_content/collections'),
        ],

        'entries' => [ // content
            'directory' => base_path('content/collections'),
        ],

        'navigation' => [ // config
            'directory' => config_path('statamic_content/navigation'),
        ],

        'collection-trees' => [ // content
            'directory' => base_path('content/trees/collections'),
        ],

        'nav-trees' => [ // content
            'directory' => base_path('content/trees/navigation'),
        ],

        'globals' => [ // config & content
            'directory' => base_path('content/globals'),
        ],

        'asset-containers' => [ // config
            'directory' => config_path('statamic_content/assets'),
        ],

        'users' => [ // content, but maybe special
            'directory' => base_path('users'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Indexes
    |--------------------------------------------------------------------------
    |
    | Here you may define any additional indexes that will be inherited
    | by each store in the Stache. You may also define indexes on a
    | per-store level by adding an "indexes" key to its config.
    |
    */

    'indexes' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Locking
    |--------------------------------------------------------------------------
    |
    | In order to prevent concurrent requests from updating the Stache at
    | the same and wasting resources, it will be "locked" so subsequent
    | requests will have to wait until the first has been completed.
    |
    | https://statamic.dev/stache#locks
    |
    */

    'lock' => [
        'enabled' => true,
        'timeout' => 30,
    ],

];
