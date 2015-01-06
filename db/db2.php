<?php

include_once('../db/config.php');
include_once('../db/log.php');
include_once '../db/error.php';
//define('P_Android',1);
//define('P_IOS',2);

class DB2 {

    private $dbname;
    public function __construct($name){
        $this->dbname = $name;
	}
	public function __destruct() {
		$this->close_db();
	}


    public function select2($table, $keys, $conditions = null, $limit1 = true, $pf = null) {
		$this->init_db($pf);
		$query = '';
		if($conditions) {
			$query = 'select '.$keys.' from '.$table.' where '.$conditions;
		}else {
			$query = 'select '.$keys.' from '.$table;
		}
		if($limit1) {
			$query .= ' limit 1;';
		}else {
			$query .= ';';
		}
		$result = mysql_query($query);
		if($result) {
			$ret = array();
			while($row = mysql_fetch_array($result)) {
				$ret[] = $row;
			}
			mysql_free_result($result);
            if(count($ret) > 0) {
                if($limit1)
                {
                    return $ret[0];
                }
                else
                {
				    return $ret;
                }
			}
		}else {
			//$this->close_db();
            //sendError('execute query error: '.mysql_error(). ' for '.$query, E_DB);
            SendError2(E_DB,'execute query error:'.mysql_error().' for '.$query);
		}
		return null;
	}

	public function select($query) {
		$this->init_db();
		$result = mysql_query($query);
		if($result) {
			$ret = array();
			while($row = mysql_fetch_array($result)) {
				$ret[] = $row;
			}
			mysql_free_result($result);
			if(count($ret) > 0) {
				return $ret;
			}
		}else {
			//$this->close_db();
			//sendError('execute query error: '.mysql_error(). ' for '.$query, E_DB);
            SendError2(E_DB,'execute query error:'.mysql_error().' for '.$query);
        }

		return null;
	}

	public function update2($table, $kvs, $conditions = null, $encode_json = true, $limit1 = true) {
		if(!$kvs || count($kvs) == 0) {
            //sendError('update key is null', E_DB);
            SendError2(E_DB,'update key is null');
		}
		$this->init_db();
		$query = 'update '.$table.' set '; 
		$first = true;
		foreach($kvs as $key=>$value) {
			if(!$first) {
				$query .= ',';
			}
			if($encode_json) {
				$query .= $key.'='.json_encode($value);
			}else {
				$query .= $key.'='.$value;
			}
			$first = false;
		}
		if($conditions) {
			$query .= ' where '.$conditions;
		}
		if($limit1) {
			$query .= ' limit 1';
		}

		$query .= ';';

		if(!mysql_query($query)) {
			//$this->close_db();
			//sendError('execute query error: '.mysql_error(). ' for '.$query, E_DB);
            SendError2(E_DB,'execute query error:'.mysql_error().' for '.$query);
        }
	}

	public function update($query) {
		$this->init_db();
		if(!mysql_query($query)) {
			//$this->close_db();
            //sendError('execute query error: '.mysql_error(). ' for '.$query, E_DB);
            SendError2(E_DB,'execute query error:'.mysql_error().' for '.$query);
		}
	}

	public function insert2($table, $kvs,$ret=false) {
		if(!$kvs || count($kvs) == 0) {
            //sendError('insert key is null', E_DB);
            SendError2(E_DB,'insert key is null');
		}
		$this->init_db();
		$query = 'insert into '.$table.'('; 
		$first = true;
		$keys = '';
		$values = '';
		foreach($kvs as $key=>$value) {
			if(!$first) {
				$keys .= ',';
				$values .= ',';
			}
			$keys .= $key;
			$values .= $value;
			$first = false;
		}
		$query .= $keys.')values('.$values.');';
		if(!mysql_query($query)) {
			//$this->close_db();
			//sendError('execute query error: '.mysql_error(). ' for '.$query, E_DB);
            SendError2(E_DB,'execute query error:'.mysql_error().' for '.$query);
        }
		if($ret){
			$id=mysql_insert_id($this->connection);
		}
		if($ret){
			return $id;
		}
	}

	public function insert($query) {
		$this->init_db();
		if(!mysql_query($query)) {
			//$this->close_db();
            //sendError('execute query error: '.mysql_error(). ' for '.$query, E_DB);
            SendError2(E_DB,'execute query error:'.mysql_error().' for '.$query);
		}
	}

	public function remove2($table, $conditions, $limit1 = true) {
		$this->init_db();
		$query = 'delete from '.$table.' where '.$conditions;
		if($limit1) {
			$query .= ' limit 1';
		}
		$query .= ';';
		if(!mysql_query($query)) {
			//$this->close_db();
			//sendError('execute query error: '.mysql_error(). ' for '.$query, E_DB);
            SendError2(E_DB,'execute query error:'.mysql_error().' for '.$query);
        }
	}

	public function remove($query) {
		$this->init_db();
		if(!mysql_query($query)) {
			//$this->close_db();
			//sendError('execute query error: '.mysql_error(). ' for '.$query, E_DB);
            SendError2(E_DB,'execute query error:'.mysql_error().' for '.$query);
        }
	}

	public function start_transaction() {
		$this->init_db();
//		mysql_query('set autocommit=0;');
//		mysql_query('start transaction;');
		mysql_query('begin;');
		$this->in_transaction = true;
	}

	public function commit_transaction() {
		if($this->in_transaction) {
			mysql_query('commit;');
			$this->in_transaction = false;
//			mysql_query('set autocommit=1;');
		}
	}

	public function init_db($pf = null) {
		global $_config;
        if(!$this->inited) {
          //  if(!in_array($_config["$this->dbname"]['mysql_host']) || !in_array($_config["$this->dbname"]['mysql_user']) ||!in_array["$this->dbname"]['mysql_password'])
            if(!array_key_exists("$this->dbname",$_config['db']))
            {
               // sendError('db not exist',null,true);
                SendError2(E_DB,'db not exsist');
                return;
            }
			$this->connection = mysql_connect($_config['db']["$this->dbname"]['mysql_host'],$_config['db']["$this->dbname"]['mysql_user'],$_config['db']["$this->dbname"]['mysql_password']);
			if(!$this->connection) {
                //sendError('Cannot connect to mysql: '. mysql_error());
                SendError2(E_DB,'Cannot connrct to mysql:'.mysql_error());
			}
            $dbname = null;
            if($pf == null && !isset($_SESSION['platform'])) {
                //sendError("relogin");
                SendError2(E_DB,'relogin');
            } else if ($pf == null) {
                if((int)$_SESSION["platform"] == P_Android) {
                    $dbname = $_config['db']["$this->dbname"]['mysql_dbname'];
                }else if((int)$_SESSION["platform"] == P_IOS) {
                    $dbname = $_config['db']["$this->dbname"]['mysql_dbname']."_ios";
                }else {
                    //sendError("relogin");
                    SendError2(E_DB,'relogin');
                }
            }else {
                if($pf == P_Android) {
                    $dbname = $_config['db']["$this->dbname"]['mysql_dbname'];
                }else if($pf == P_IOS) {
                    $dbname = $_config['db']["$this->dbname"]['mysql_dbname']."_ios";
                }else {
                    // sendError("relogin");
                    SendError2(E_DB,'relogin');
                }
            }
            if(!mysql_select_db($dbname, $this->connection)) {
                //$this->close_db();
				//sendError('Cannot select db: '.$_config['mysql_dbname'].'.'.mysql_error());
                SendError2(E_DB,'Cannot select db:'.$_config['db']["$this->dbname"]['mysql_dbname'].mysql_error());
            }
			mysql_query('set names utf8;');
			$this->inited = true;
		}
	}

	private function close_db() {
		if(!$this->inited)
			return;
		if($this->in_transaction) {
			mysql_query('rollback;');
			$this->in_transaction = false;
        }
//        echo 'aaa';
  //      var_dump($this->connection);
		mysql_close($this->connection);
		$this->inited = false;
	}

	private $inited = false;
	private $connection;
	private $in_transaction = false;
}

