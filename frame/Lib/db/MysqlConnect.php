<?php
namespace Lightphp\db;
class MysqlConnect {
    public static function Newconnect($config){
        $connection = new \Swoole\Coroutine\MySQL();
        $connection->connect($config);
        return $connection;
    }

    public function disconnect($connection){
        $connection->close();
    }

    public function isconnect($connection){
        return $connection->connected;
    }
}
