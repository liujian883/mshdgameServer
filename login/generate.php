<?php
include_once '../db/db2.php';

class TableInfo
{
    var $className;
    var $elementKey;
    var $primaryKey;
    var $foreignKey;
    var $externalHeader;

    function __construct($cName,$pKey,$eKey = -1,$fKey = null,$eHeader = null)
    {
        $this->className = $cName;
        $this->primaryKey = $pKey;
        $this->elementKey = $eKey;
        $this->foreignKey = $fKey;
        $this->externalHeader = $eHeader;
    }
}

$tables = array();
$tables["equipmentModel"] = new TableInfo("equipmentModel","equipmentID");
$tables["propsModel"] = new TableInfo("propsModel","propsModelID");

$tablesTwoParam = array();
$tablesTwoParam["enemyModel"] = new TableInfo("enemyModel",array("level","IDPrefab"));
$tablesTwoParam["heroModel"] = new TableInfo("heroModel",array("heroID","level"));
$tablesTwoParam["petModel"] = new TableInfo("petModel",array("level","IDPrefab"));

$db = new DB2("babyplan");
$db->init_db(P_Android);
class Column
{
    var $field;
    var $isString;
}

function getColumns($table)
{
    global $db;
    $desc = $db->select("desc ".$table.";");
    $ret = array();
    foreach($desc as $col)
    {
        $c = new Column();
        $c->field = $col['Field'];
        if(substr($col['Type'],0,7) == "varchar")
        {
            $c->isString = true;
        }
        else
        {
            $c->isString = false;
        }
        $ret[] = $c;
    }
    return $ret;
}

function tableToClass($tableName,$tableInfo)
{
    global $tables;
    global $db;
    $fp = fopen("../model/$tableName"."_model.php","w");
    fwrite($fp,"<?php".PHP_EOL.PHP_EOL);
    
    fwrite($fp,PHP_EOL."class $tableInfo->className"."Model {".PHP_EOL);
    $cols = getColumns($tableName);
    $eles = array();
    if($tableInfo->elementKey == -1)
    {
        $eles = $cols;
    }

    foreach($eles as $ele)
    {
        fwrite($fp,"\tvar \$$ele->field;".PHP_EOL);
    }
    
    fwrite($fp,"\tpublic static \$data = array(".PHP_EOL);
    $data = $db->select2($tableName,"*",null,false,P_Android);
    foreach($data as $line)
    {
        fwrite($fp,"\t\t".$line[$tableInfo->primaryKey]."=>array(".PHP_EOL);
        foreach($cols as $col)
        { 
            if($tableInfo->primaryKey == $col->field)
            {
                continue;
            }
            $value = "";
            if($col->isString)
            {
                $value = "'".$line[$col->field]."'"; 
            }
            else
            {
                $value = $line[$col->field];
            }
            fwrite($fp,"\t\t\t'".$col->field."'=>".$value.",".PHP_EOL);
        }
        fwrite($fp,"\t\t),".PHP_EOL);
    }
    fwrite($fp,"\t);".PHP_EOL);
    
    if(count($eles) > 0)
    {
        fwrite($fp,PHP_EOL."\tfunction __construct(\$id) {".PHP_EOL);
    }
    foreach($eles as $ele)
    {
        if($tableInfo->primaryKey == $ele->field)
        {
           fwrite($fp,"\t\t\$this->$ele->field = \$id;".PHP_EOL);
        }
        else
        {
            fwrite($fp,"\t\t\$this->$ele->field = self::\$data[\$id]['$ele->field'];".PHP_EOL);
        }
    }

    if(count($eles) > 0)
    {
        fwrite($fp,"\t}".PHP_EOL);
    }
    fwrite($fp,"}".PHP_EOL);
    fclose($fp);
}

function tableToClassTwoParam($tableName,$tableInfo)
{
    global $tablesTwoParam;
    global $db;
    $fp = fopen("../model/$tableName"."_model.php","w");
    fwrite($fp,"<?php".PHP_EOL.PHP_EOL);
    
    fwrite($fp,PHP_EOL."class $tableInfo->className"."Model {".PHP_EOL);
    $cols = getColumns($tableName);
    $eles = array();
    if($tableInfo->elementKey == -1)
    {
        $eles = $cols;
    }

    foreach($eles as $ele)
    {
        fwrite($fp,"\tvar \$$ele->field;".PHP_EOL);
    }
    
    fwrite($fp,"\tpublic static \$data = array(".PHP_EOL);
    $data = $db->select2($tableName,"*",null,false,P_Android);
    if(!$data)
    {
        return;
    }
    foreach($data as $line)
    {
        $arr = $tableInfo->primaryKey;
        fwrite($fp,"\t\t"."'".$line[$arr[0]]."+".$line[$arr[1]]."'"."=>array(".PHP_EOL);
        foreach($cols as $col)
        { 
            $arr1 = $tableInfo->primaryKey;
            if($arr1[0] == $col->field || $arr1[1] == $col->field)
            {
                continue;
            }
            $value = "";
            if($col->isString)
            {
                $value = "'".$line[$col->field]."'"; 
            }
            else
            {
                $value = $line[$col->field];
            }
            fwrite($fp,"\t\t\t'".$col->field."'=>".$value.",".PHP_EOL);
        }
        fwrite($fp,"\t\t),".PHP_EOL);
    }
    fwrite($fp,"\t);".PHP_EOL);
    
    if(count($eles) > 0)
    {
        fwrite($fp,PHP_EOL."\tfunction __construct(\$id,\$level) {".PHP_EOL);
    }
    foreach($eles as $ele)
    {
        $arr = $tableInfo->primaryKey;
        if($arr[0] == $ele->field || $arr[1] == $ele->field)
        {
            if($ele->field == "level")
            {
                fwrite($fp,"\t\t\$this->$ele->field = \$level;".PHP_EOL);
            }
            else
            {
                fwrite($fp,"\t\t\$this->$ele->field = \$id;".PHP_EOL); 
            }
        }
        else
        {
            fwrite($fp,"\t\t\$this->$ele->field = self::\$data[\$id.'+'.\$level]['$ele->field'];".PHP_EOL);
        }
    }

    if(count($eles) > 0)
    {
        fwrite($fp,"\t}".PHP_EOL);
    }
    fwrite($fp,"}".PHP_EOL);
    fclose($fp);
}

foreach($tables as $table)
{
    tableToClass($table->className,$table);
}

foreach($tablesTwoParam as $tab)
{
    tableToClassTwoParam($tab->className,$tab);
}

?>
