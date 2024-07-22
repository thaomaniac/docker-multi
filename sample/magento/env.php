<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => 'mysql',
                'dbname' => 'magento',
                'username' => 'root',
                'password' => '1',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'persistent' => null
            ],
            'default' => [
                'host' => 'mysql',
                'dbname' => 'magento',
                'username' => 'root',
                'password' => '1',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => '6f16f136edbb237f765c1f4c26f40ef8'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'm2_'
            ],
            'page_cache' => [
                'id_prefix' => 'm2_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'magento.local'
    ],
    'install' => [
        'date' => 'Wed, 22 Sep 2021 06:54:56 +0000'
    ],
    //'MAGE_INDEXER_THREADS_COUNT' => 1,
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://magento.local/',
                    'base_link_url' => '{{unsecure_base_url}}',
                    'base_static_url' => null,
                    'base_media_url' => null
                ],
                'secure' => [
                    'base_url' => '{{unsecure_base_url}}',
                    'base_link_url' => '{{secure_base_url}}',
                    'base_static_url' => null,
                    'base_media_url' => null,
                    'use_in_frontend' => 0,
                    'use_in_adminhtml' => 0
                ],
                'cookie' => [
                    'cookie_lifetime' => 864000,
                ]
            ],
            'catalog' => [
                'search' => [
                    'engine' => 'elasticsearch7',
                    'elasticsearch7_server_hostname' => 'elasticsearch',
                    'elasticsearch7_server_port' => 9200,
                    'elasticsearch7_index_prefix' => 'magento'
                ]
            ],
            //'recaptcha_backend' => [
            //    'type_for' => [
            //        'user_login' => null,
            //        'user_forgot_password' => null,
            //    ]
            //],
            //'recaptcha_frontend' => [
            //    'type_for' => [
            //        'customer_login' => null,
            //        'customer_create' => null,
            //        'customer_forgot_password' => null,
            //        'customer_edit' => null,
            //    ]
            //],
            //'customer' => [
            //    'captcha' => [
            //        'enable' => 0
            //    ]
            //],
            'admin' => [
                'security' => [
                    'use_form_key' => 0,
                    'session_lifetime' => 31536000,
                    'password_is_forced' => 0,
                    'lockout_failures' => '',
                    'password_lifetime' => '',
                ],
                'captcha' => [
                    'enable' => 0
                ]
            ],
            'system' => [
                'smtp' => [
                    'transport' => 'smtp',
                    'host' => 'mailhog',
                    'port' => '1025',
                ]
            ],
            //'dev' => [
            //    'grid' => [
            //        'async_indexing' => 0 // default: 0
            //    ],
            //],
        ],
        //'websites' => [
        //    'website1' => [
        //        'web' => [
        //            'unsecure' => [
        //                'base_url' => 'https://website1.local/',
        //                'base_link_url' => '{{unsecure_base_url}}',
        //                'base_static_url' => null,
        //                'base_media_url' => null
        //            ],
        //            'secure' => [
        //                'base_url' => '{{unsecure_base_url}}',
        //                'base_link_url' => '{{secure_base_url}}',
        //                'base_static_url' => null,
        //                'base_media_url' => null,
        //                'use_in_frontend' => 0,
        //                'use_in_adminhtml' => 0
        //            ]
        //        ]
        //    ]
        //],
    ]
];
