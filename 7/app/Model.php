<?php
namespace App;
require(__DIR__.'/DB.php');
Class Model {

    private $db;

    public function __construct() 
    {
        $this->db = new DB;
        $this->db->CreateConnection();
    }

    public function insertOne(array $columns, array $params) : bool
    {
        $cols = [];
        $vals = [];

        foreach($columns as $key => $value)
        {
            $cols[]='`'.$value.'`';
        }

        $cols = implode(',',$cols);

        foreach($params as $k => $v)
        {
            $vals[]="'".$v."'";
        }

        $vals = implode(',',$vals);

        $sql = "INSERT INTO tweets ($cols) VALUES ($vals)";

        return $this->db->ExecuteQuery($sql);
    }

    public function selectAll(array $columns) : array
    {
        $cols = [];
        
        foreach($columns as $key => $value)
        {
            $cols[]='`'.$value.'`';
        }

        $cols = implode(',',$cols);


        $sql = "SELECT $cols FROM tweets";

        $collection = [];
        foreach($this->db->ExecuteQuery($sql) as $result){
            $collection[] = $result;
        }

        return $collection;

    }

    public function selectWhere(array $columns, array $wheres) : array
    {
        $cols = [];
        
        foreach($columns as $key => $value)
        {
            $cols[]='`'.$value.'`';
        }

        $cols = implode(',',$cols);


        $sql = "SELECT $cols FROM tweets";

        $collection = [];
        foreach($this->db->ExecuteQuery($sql) as $result){
            $collection[] = $result;
        }

        return $collection;
    }
}

// $m = new Model();
// var_dump($m->insertOne(['user','message'],['joanjpx','Hola Mundo desde Class Model']));
// var_dump($m->SelectAll(['id','user','message']));
