# LightPHP
  一款轻量的，基于swoole开发的PHP框架，包括api模式和守护进程模式，当前版本v0.1
  (A lightweight, swoole based PHP framework, including API mode and daemon mode, current version v0.1)

## 框架定位 
  需要开发简单的api和后台守护进程的开发者

## 环境要求 
  Linux, <br>
  PHP >= 7.2, <br> 
  Swoole >= 4.2.12 <br>
  eio <br>

## 快速使用
##### 创建目录
  mkdir /opt/php  <br>
  cd /opt/php <br>

##### 下载框架
  git clone https://github.com/iuiely/LightPHP.git <br>

##### api 模式启动 
  php /opt/php/LightPHP/bin/api start -d

##### 简单测试 
  curl http://127.0.0.1:9501  
  Hello, World!

##### 守护进程模式启动  
  php /opt/php/LightPHP/bin/server start  

##### 简单测试 
  cat /opt/php/LightPHP/logs/server/server.log  
  Hello, World!  

## 开发文档

### 文件说明
  config/config.ini <br>
  这个文件是整个框架的资源配置文件，是mysql,redis,rabbitmq配置文件的默认读取路径; <br>
  这个文件可以增加新的配置，然后通过助手函数config()读取 <br>
  
  frame/config/ <br>
  这个目录下的文件是框架配置文件，包括api模式的配置模板文件api.php，守护进程模式的配置模板文件server.php。 <br>
  可以按相同的格式增加新配置文件，用来生成不同的项目。例：增加新的守护进程配置文件 <br>
  monitor.php 
  ```
  return [
    // global set
    'default' => [
        // 运行在守护进程之下的，应用命名空间名称
        'module'      => 'monitor',
        // 运行在守护进程之下的，应用进程的主类名,
        'class'       => 'console',
        // 运行在守护进程之下的，应用进程方法名
        'method'      => 'execute',
        // 应用的守护进程参数
        'parameter'   => '',
        'app_path'    => realpath(dirname(dirname(__DIR__)).'/apps/'),
    ],
    'server' =>[
        // 应用进程的显示名称
        'service'     => 'monitor',
        // 应用的pid存储位置
        'pid_file'    => dirname(dirname(__DIR__)).'/runtime/pid/server.pid',
        // 应用的错误日志和普通日志输出的位置
        'log_file'    => dirname(dirname(__DIR__)).'/logs/server/server.log',
    ]
  ];
  ```
### 应用进程启动命令目录和文件说明
  bin 
  这个目录下保存着应用的启动脚本文件，增加了新的应用，不管是api，还是守护进程，都需要增加新的启动脚本。<br>
  接上面新增monitor守护进程的例子，进行下面的步骤 <br>
  a、复制启动脚本 <br>
  cp bin/server bin/monitor <br>
  b、修改配置文件路径 <br>
  原始： <br>
  ```
  $frame_config_file = BIN_ROOT.'frame/config/server.php';
  ```
  修改： <br>
  ```
  $frame_config_file = BIN_ROOT.'frame/config/monitor.php';
  ```
  
