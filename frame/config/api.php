<?php
return [
    // global set
    'default' => [
        // 应用目录
        'module'      => 'api',
        'app_path'    => realpath(dirname(dirname(__DIR__)).'/apps/'),
    ],
    // api config  , http set
    'api' =>[
         //server config
        'ip'          => '0.0.0.0',
        'port'        => '9501',
        'type'        => 'http',
        'service'     => 'api',
        'pid_path'    => '/var/run',
        'gzip'        => 0,
        //swoole config
        'set'         => [
            'daemonize'                => 0,
            'enable_static_handler'    => true,
            'document_root'            => realpath(dirname(dirname(__DIR__)).'/public/'),
            'worker_num'               => 4,
            'max_request'              => 10000,
            'dispatch_mode'            => 7,
            'reload_async'             => true,
            'max_wait_time'            => 600,
            'max_coroutine'            => 3000,
            'buffer_output_size'       => 4 * 1024 * 1024,
            'task_enable_coroutine'    => true,
            'enable_reuse_port'        => true,
            'open_tcp_nodelay'         => true,
            'log_file'                 => dirname(dirname(__DIR__)).'/logs/api/api.log'
        ],
    ],
    'route' =>[
        'test' => array(
            ['get','test','test/view',''],
            ['get','test/id','test/show','id'],
            ['post','test','test/add',''],
            ['put','test/id','test/update','id'],
            ['delete','test/id','test/del','id'],
        ),
    ],
];
