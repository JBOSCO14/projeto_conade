<?php
namespace app\lib;

class Database{
    private $db;

    public function __construct(){
        $this->db = new \PDO('mysql:host=localhost;dbname=app;charset=utf8', 'app', 'app');
    }

    public function query($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function insert($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function update($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function delete($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function select($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function get($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function count($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        return $result;
    }

    public function begin(){
        return $this->db->beginTransaction();
    }

    public function commit(){
        return $this->db->commit();
    }

    public function rollback(){
        return $this->db->rollBack();
    }


    public function setCharset($charset){
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->db->exec("SET NAMES '". $charset. "'");
    }

    public function getCharset(){
        $result = $this->db->getAttribute(\PDO::ATTR_DRIVER_NAME);
        return $result;
    }

    public function setCollation($collation){
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->db->exec("SET NAMES '". $collation. "'");
    }

    public function getCollation(){
        $result = $this->db->getAttribute(\PDO::ATTR_DRIVER_NAME);
        return $result;
    }

    public function beginTransaction(){
        return $this->db->beginTransaction();
    }

    public function commitTransaction(){
        return $this->db->commit();
    }

    public function rollbackTransaction(){
        return $this->db->rollBack();
    }


    public function execute($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function exec($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function lastInsertId(){
        $result = $this->db->lastInsertId();
        return $result;
    }

    public function setFetchMode($mode){
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, $mode);
    }

    public function getFetchMode(){
        $result = $this->db->getAttribute(\PDO::ATTR_ERRMODE);
    }



}