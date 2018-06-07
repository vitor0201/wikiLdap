<?php
return [
    /**
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    // 'debug' => filter_var(env('DEBUG', false), FILTER_VALIDATE_BOOLEAN),
     'debug' => (env('DEBUG', true)),
   
    'App' => [
        'namespace' => 'App',
        'encoding' => env('APP_ENCODING', 'UTF-8'),
        'defaultLocale' => env('APP_DEFAULT_LOCALE', 'pt_br'),
        'base' => false,
        'dir' => 'src',
        'webroot' => 'webroot',
        'wwwRoot' => WWW_ROOT,
        // 'baseUrl' => env('SCRIPT_NAME'),
         'fullBaseUrl' => false,
        'imageBaseUrl' => 'img/',
        'cssBaseUrl' => 'css/',
        'jsBaseUrl' => 'js/',
        'paths' => [
            'plugins' => [ROOT . DS . 'plugins' . DS],
            'templates' => [APP . 'Template' . DS],
            'locales' => [APP . 'Locale' . DS],
        ],
    ],
   
    'Security' => [
        'salt' => env('SECURITY_SALT', '__SALT__'),
    ],
    
    'Asset' => [
        // 'timestamp' => true,
    ],
    
    'Cache' => [
        'default' => [
            'className' => 'File',
            'path' => CACHE,
            'url' => env('CACHE_DEFAULT_URL', null),
        ],
      
        '_cake_core_' => [
            'className' => 'File',
            'prefix' => 'myapp_cake_core_',
            'path' => CACHE . 'persistent/',
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKECORE_URL', null),
        ],
       
        '_cake_model_' => [
            'className' => 'File',
            'prefix' => 'myapp_cake_model_',
            'path' => CACHE . 'models/',
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKEMODEL_URL', null),
        ],
    ],
   
    'Error' => [
        'errorLevel' => E_ALL,
        'exceptionRenderer' => 'Cake\Error\ExceptionRenderer',
        'skipLog' => [],
        'log' => true,
        'trace' => true,
    ],
  
    'EmailTransport' => [
        'default' => [
            'className' => 'Mail',
            // The following keys are used in SMTP transports
             'host' => 'localhost',
            'port' => 25,
            'timeout' => 30,
            'username' => null,
            'password' => null,
            'client' => null,
            'tls' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
  
    'Email' => [
        'default' => [
            'transport' => 'default',
            'from' => 'you@localhost',
            //'charset' => 'utf-8',
            //'headerCharset' => 'utf-8',
        ],
    ],
 
    'Datasources' => [
        
        'default' => [         
       
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Postgres',
            'persistent' => false,
            'host' => '10.42.0.59',
           
            //'port' => 'non_standard_port_number',
             'username' => 'postgres',
            'password' => 'oxaGvCAn2',
            'database' => 'db_desenv',
            'encoding' => 'utf8',
            'timezone' => 'America/Cuiaba',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
            'schema' => 'wiki',
            'quoteIdentifiers' => false,
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
            'url' => env('DATABASE_URL', null),
        ],
        
        'sispe' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Sqlserver',
            'persistent' => false,
            'host' => '192.168.100.202',           
            'port' => '1433',
            'username' => 'user_relatorio',
            'password' => '1a2b3cR$',
            'database' => 'nhu',
            //'encoding' => 'utf8',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            'schema' => 'ponto',
            'log' => false,
            'quoteIdentifiers' => true,
            ],
        
        
        'aghu' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Postgres',
            'persistent' => false,
            'host' => '10.42.1.10',
            'port' => '6544',
            'username' => 'ugen_integra',
            'password' => 'aghuintegracao',
            'database' => 'dbaghu',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            //'schema' => 'wifi',
             'log' => false,
            
            'aghu' => [
                'className' => 'Cake\Database\Connection',
                'driver' => 'Cake\Database\Driver\Postgres',
                'persistent' => false,
                'host' => '10.42.1.10',
                'port' => '6544',
                'username' => 'ugen_integra',
                'password' => 'aghuintegracao',
                'database' => 'dbaghu',
                'encoding' => 'utf8',
                'timezone' => 'UTC',
                'cacheMetadata' => true,
                //'schema' => 'wifi',
                 'log' => false,
                'quoteIdentifiers' => false,
                //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
            ],

            'quoteIdentifiers' => false,

            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
        ],

        'test' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
             'username' => 'my_app',
            'password' => 'secret',
            'database' => 'test_myapp',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            'quoteIdentifiers' => false,
            'log' => false,
            //'init' => ['SET GLOBAL innodb_stats_on_metadata = 0'],
             'url' => env('DATABASE_TEST_URL', null),
        ],
    ],
    /**
     * Configures logging options
     */
    'Log' => [
        'debug' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'debug',
            'url' => env('LOG_DEBUG_URL', null),
            'scopes' => false,
            'levels' => ['notice', 'info', 'debug'],
        ],
        'error' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'error',
            'url' => env('LOG_ERROR_URL', null),
            'scopes' => false,
            'levels' => ['warning', 'error', 'critical', 'alert', 'emergency'],
        ],
        // To enable this dedicated query log, you need set your datasource's log flag to true
         'queries' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'queries',
            'url' => env('LOG_QUERIES_URL', null),
            'scopes' => ['queriesLog'],
        ],
    ],
  
    'Session' => [
        'defaults' => 'php',
    ],
];