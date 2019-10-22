# LightPHP
一款轻量的，基于swoole开发的PHP框架(A lightweight, swoole based PHP framework)

v0.1 基于swoole的api和守护进程框架

## 框架定位 <br>
需要开发简单的api和后台守护进程的开发者

## 环境要求 <br>
Linux, <br>
PHP >= 7.2, <br>
Swoole >= 4.2.12 <br>

## 快速使用
#### 创建目录
mkdir /opt/php <br>
cd /opt/php <br>
git clone https://github.com/iuiely/LightPHP.git <br>

#### api 模式启动 <br>
php /opt/php/LightPHP/bin/api start -d

#### 守护进程模式启动 <br>
php /opt/php/LightPHP/bin/server start

