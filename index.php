<?php

/**
 * Configuration
 */
return [

    /**
     * Unique name that identifies your theme.
     */
    'name' => 'pagekit-bcs',

    /**
     * Define menu positions.
     * Will be listed in the backend so that users
     * can assign menus to these positions.
     */
    'menus' => [

        'main' => 'Main',
    ],

    /**
     * Define widget positions.
     * will be listed in the backend so that users
     * can publish widgets in these positions.
     */
    'positions' => [

        'navbar'    =>  'Navbar',
        'hero'      =>  'Hero',
        'offcanvas' =>  'Off-Canvas',
        'sidebar'   =>  'Sidebar',
        'footer'    =>  'Footer',

    ],

    'node' => [

      'cpy'   => '<p class="uk-margin-remove">Powered by <a href="https://pagekit.com">Pagekit</a> <i class="icofont icofont-code-alt"></i> Theme Pagekit-Bcs</p>',
      'hero_image'  => '',
      'light'       => false, // You want text color at white
      'blend'       => false, // Color is Active
      'color'       => '',    // You select color to page
      'content'     => false, // Content Hide True
      'title'       => false, // Title Hide True
    ],

    /**
     * Widget defaults
     */
    'widget' => [

        'title'   => false,
        'panel'   => '',
        'padding' =>  'uk-card-body'

    ],

    /**
     * Settings url
     */
    'settings' => '@site/settings#site-theme',

    /**
     * Events
     */
    'events' => [

      'view.system/site/admin/edit' => function ($event, $view) {
        $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
      },

      'view.system/widget/edit' => function ($event, $view) {
          $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
      },

    ]

];
