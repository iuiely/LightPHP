# LightPHP
一款轻量的，基于swoole开发的PHP框架(A lightweight, swoole based PHP framework)

v0.1 基于swoole的api和守护进程框架

框架定位
需要开发简单的api和后台守护进程的开发者

环境要求
Linux,
PHP >= 7.2
Swoole >= 4.2.12

快速使用
mkdir /opt/php
cd /opt/php

git clone https://github.com/iuiely/LightPHP.git

api 模式启动
php /opt/php/LightPHP/bin/api start -d

守护进程模式启动
php /opt/php/LightPHP/bin/server start

