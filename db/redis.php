<?php

include_once 'db2.php';
include_once 'error.php';
include_once 'config.php';

class red 
{
    private static $_instance = null;
    private  $conn = null;

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self))
        {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    private function __construct()
    {
        global $_config;
        $this->conn = new Redis;
        
        if (!$this->conn->connect($_config['redis_host'], $_config['redis_port']))
        {
            SendError2(E_RED, 'can not connect memcache '.$_config['redis_host'].':'.$_config['redis_port']);
        }
    }
    

    public function sAdd($key, $value) 
    {
        if($this->conn)
        {
            $ret = $this->conn->sAdd($key, $value);
            if ($ret === false)
            {
                SendError2(E_RED,"set $key $value error");               
            }
        }
    }
    
    // 随机返回一个，并且删除
    public function sPop($key) 
    {
        if($this->conn)
        {
            return $this->conn->sPop($key);
        }
    }
    
    public function sRem($key, $member)
    {
        if($this->conn)
        {
            return $this->conn->sRem($key, $member);
        }
    }

    public function get($key)
    {
        if($this->conn)
        {
            $ret = $this->conn->get($key);
            if($ret)
            {
                return $ret;
            }
            else
            {
                SendError2("the $key no exist");
            }
        }
    }
    
    public function set($key,$value)
    {
        if($this->conn)
        {
            $this->conn->set($key,$value);
        }
    }

    public function transcation_start()
    {
        $this->conn->multi();
    }
    public function transaction_commit()
    {
        $this->conn->exec();
    }

    public function redisCas()
    {
        $num = func_num_args();
        $arr = func_get_args();
        for($i = 0; $i < $num; $i++)
        {
            $this->conn->watch($arr[$i]);
        }
    }

}
