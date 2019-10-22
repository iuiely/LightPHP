# LightPHP
一款轻量的，基于swoole开发的PHP框架，包括api模式和守护进程模式，当前版本v0.1
(A lightweight, swoole based PHP framework, including API mode and daemon mode, current version v0.1)

## 框架定位 <br>
需要开发简单的api和后台守护进程的开发者

## 环境要求 <br>
Linux, <br>
PHP >= 7.2, <br>
Swoole >= 4.2.12 <br>

## 快速使用
##### 创建目录
mkdir /opt/php <br>
cd /opt/php <br>

##### 下载框架
git clone https://github.com/iuiely/LightPHP.git <br>

##### api 模式启动 <br>
php /opt/php/LightPHP/bin/api start -d

##### 简单测试 <br>
curl http://127.0.0.1:9501 <br>
Hello, World!

##### 守护进程模式启动 <br>
php /opt/php/LightPHP/bin/server start <br>

##### 简单测试 <br>
cat /opt/php/LightPHP/logs/server/server.log <br>
Hello, World! <br>

## 开发文档

