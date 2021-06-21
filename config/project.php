<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Prefix: 'admin'
    |--------------------------------------------------------------------------
    */
    'prefix' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Layouts: 'layouts.adminlte'
    |--------------------------------------------------------------------------
    */
    'theme' => 'layouts.adminlte',
    /*

    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    */
    'logo' => env('APP_NAME', 'Laravel'),
    'logo_img' => env('APP_LOGO', 'vendor/admin-lte/dist/img/AdminLTELogo.png'),

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    */
    'sidebar_collapse' => false,
    /*
    * Theme: 'light', 'dark'
    */
    'sidebar_theme' => 'dark',
    /*
    * Color: blue, black, purple, yellow, red, green
    * Ligth: blue-light, purple-light, purple-light
    */
    'color' => 'green',

    /*
    |--------------------------------------------------------------------------
    | Footer
    |--------------------------------------------------------------------------
    */
    'since_year' => env('APP_SINCE_YEAR', date('Y')),
    'footer_name' => env('APP_FOOTER_NAME', 'Laravel'),
    'produced_by' => env('APP_PRODUCED_BY', 'Laravel'),
    'produced_url' => env('APP_PRODUCED_URL', 'https://laravel.com'),
    /*
     * Text Size:  null, 'text-sm'
     */
    'footer_text_size' => null,

    /*
    |--------------------------------------------------------------------------
    | Dates
    |--------------------------------------------------------------------------
    */
    'date_format' => 'Y-m-d',
    'time_format' => 'H:i:s',
    'datetime_format' => 'Y-m-d H:i:s',
    'flatpickr_date_format' => 'Y-m-d',
    'flatpickr_time_format' => 'H:i:S',
    'flatpickr_datetime_format' => 'Y-m-d H:i:S',

    /*
    |--------------------------------------------------------------------------
    | Languages
    |--------------------------------------------------------------------------
    */
    'supported_languages' => [
        [
            'title' => 'English',
            'short_code' => 'en',
            'icon' => 'flag-icon flag-icon-us'
        ],
        [
            'title' => 'Português',
            'short_code' => 'pt_BR',
            'icon' => 'flag-icon flag-icon-br',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    */
    'pagination' => [
        'per_page' => 10,
        'options' => [
            10,
            25,
            50,
            100,
        ],
    ],
];
