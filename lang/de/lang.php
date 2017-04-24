<?php
return [
    'plugin' => [
        'name' => 'Blog Kategoriethemen',
        'description' => 'Bietet thematische Anpassungsmöglichkeiten für Kategorien des Rainlab Blog plugin.',
    ],
    'models' => [
        'category' => [
            'fields' => [
                'color' => 'Kategoriefarbe',
                'css' => 'Kategorie-CSS',
                'theme_images' => 'Kategoriebild'
            ]
        ]
    ],
    'tabs' => [
        'theme' => 'Thema',
        'advanced_theme' => 'Erweitertes Thema'
    ]
];
