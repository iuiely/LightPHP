<?php
namespace Lightphp\redis;
use Lightphp\redis\RedisConnect;

class Redis{
    protected $connection;
    protected $config =[];
    public function __construct(array $config){
        if(empty($config)){
            throw new \RuntimeException(printf("Error!Redis config is empty"));
        }
        $this->config = $config;
        $this->connect($this->config);
    }
    public function connect(array $config){
        $this->connection = RedisConnect::connect($config);
        return $this->connection;
    }
    public function keys($key=null){
        if(empty($key)){
            return $this->connection->keys('*');
        }elseif(!empty($key)){
            return $this->connection->keys($key);
        }
    }
    public function get($key){
        return $this->connection->get($key);
    }
    public function set($key,$value,$expire=''){
        if(empty($expire)){
            $result = $this->connection->set($key,$value);
            return $result;
        }else{
            $result = $this->connection->set($key,$value,$expire);
            return $result;
        }
    }
    public function del($key){
        if(empty($key)){
            return false;
        }
        return $this->connection->del($key);
    }
}
