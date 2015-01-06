<?php
include_once('../db/config.php');
include_once('../db/error.php');

class mem
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
        $this->conn = new Memcache;
        
        if (!$this->conn->addServer($_config['memcache']['host'], $_config['memcache']['port']))
        {
            SendError2(E_MEM, 'can not connect memcache '.$_config['memcache']['host'].':'.$_config['memcache']['port']);
        }
    }

    public function mcSet($key, $value, $lifetime=30)
    {
        $ret = $this->conn->set($key, $value, $lifetime);
        if ($ret === false)
        {
            SendError2(E_MEM, "set $key $value error");
        }
    }

    public function mcGet($key)
    {
        return $this->conn->get($key);
    }

    public function mcDel($key)
    {
        return $this->conn->delete($key);
    }
}
?>
