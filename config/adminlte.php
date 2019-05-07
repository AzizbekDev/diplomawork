<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Admin',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Admin</b>',

    'logo_mini' => '<b>BMI</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'black',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'dashboard',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'АСОСИЙ НАВИГАЦИЯ',
        [
            'text' => 'Бош саҳифа',
            'url'  => 'dashboard',
            'icon' => 'tachometer',
            // 'can'  => 'manage-dashboard',
        ],
        // 'ФАРГОНА ВИЛОЯТИ',
        [
            'text'        => 'Фарғона тумани',
            'url'         => 'admin/regions/farg-ona-tumani',
            'icon'        => 'circle-thin',
            // 'label'       => 4,
            // 'label_color' => 'success',
        ],
        [
            'text'        => 'Боғдод тумани',
            'url'         => 'admin/regions/bog-dod-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Бешариқ тумани',
            'url'         => 'admin/regions/besharik-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Бувайда тумани',
            'url'         => 'admin/regions/buvayda-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Данғара тумани',
            'url'         => 'admin/regions/dang-ara-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Ёзовон тумани',
            'url'         => 'admin/regions/yozovon-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Қўштепа тумани',
            'url'         => 'admin/regions/k-ushtepa-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Қува тумани',
            'url'         => 'admin/regions/k-uva-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Олтариқ тумани',
            'url'         => 'admin/regions/oltarik-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Риштон тумани',
            'url'         => 'admin/regions/rishton-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Тошлоқ тумани',
            'url'         => 'admin/regions/toshlok-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Ўзбекистон тумани',
            'url'         => 'admin/regions/uzbekiston-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Фурқат тумани',
            'url'         => 'admin/regions/furk-at-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Учкўрик тумани',
            'url'         => 'admin/regions/uchkurik-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Сўҳ тумани',
            'url'         => 'admin/regions/sukh-tumani',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Фарғона шахар',
            'url'         => 'admin/regions/farg-ona-shahar',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Қувасой шахар',
            'url'         => 'admin/regions/k-uvasoy-shahar',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Қўқон шахар',
            'url'         => 'admin/regions/k-uk-on-shahar',
            'icon'        => 'circle-thin',
        ],
        [
            'text'        => 'Марғилон шахар',
            'url'         => 'admin/regions/marg-ilon-shahar',
            'icon'        => 'circle-thin',
        ],
        'ПРОФИЛ СОЗЛАМАЛАРИ',
        [
            'text' => 'Профил',
            'icon' => 'user',
            'submenu' => [
                [
                    'text' => 'Паролни ўзгартириш',
                    'url'  => 'admin/settings/changepass',
                    'icon' => 'lock',
                ],
            ],
        ],
        [
            'text' => 'Вилоятлар',
            'url'  => 'admin/settings/regions',
            'icon' => 'list',
            
        ],
        // [
        //     'text'    => 'Multilevel',
        //     'icon'    => 'share',
        //     'submenu' => [
        //         [
        //             'text' => 'Level One',
        //             'url'  => '#',
        //         ],
        //         [
        //             'text'    => 'Level One',
        //             'url'     => '#',
        //             'submenu' => [
        //                 [
        //                     'text' => 'Level Two',
        //                     'url'  => '#',
        //                 ],
        //                 [
        //                     'text'    => 'Level Two',
        //                     'url'     => '#',
        //                     'submenu' => [
        //                         [
        //                             'text' => 'Level Three',
        //                             'url'  => '#',
        //                         ],
        //                         [
        //                             'text' => 'Level Three',
        //                             'url'  => '#',
        //                         ],
        //                     ],
        //                 ],
        //             ],
        //         ],
        //     ],
        // ],
        // 'YORLIQLAR',
        // [
        //     'text'       => 'Important',
        //     'icon_color' => 'red',
        // ],
        // [
        //     'text'       => 'Warning',
        //     'icon_color' => 'yellow',
        // ],
        // [
        //     'text'       => 'Information',
        //     'icon_color' => 'aqua',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];