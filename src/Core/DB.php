<?php
namespace Max\NotesPro\Core;


class DB
{
    private $server = 'localhost';
    private $dbName = 'notespro';
    private $username = 'root';
    private $pwd = '';

    private static $db; // в данном свойстве будем хранить объект DB класса
    private $connection;

    private function __construct()
    {
        $this->connection = new \PDO(
            "mysql:host=$this->server;dbname=$this->dbName;charset=UTF8",
            $this->username, $this->pwd,
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
    }

    public static function getDB(){
        if (self::$db == null) self::$db = new DB();
        return self::$db;
    }

    public function getAll($sql){
        $statement = $this->connection->query($sql);
        if (!$statement) return false;
//        $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function nonSelectQuery($sql, $params){
        $statement = $this->connection->prepare($sql);
        if (!$statement) return false;
        return $statement->execute($params);
    }

    public function paramsGetAll($sql, $params) {
        $statement = $this->connection->prepare($sql);
        if (!$statement) return false;
        $statement->execute($params);
//        $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function paramsGetOne($sql, $params){
        $statement = $this->connection->prepare($sql);
        if (!$statement) return false;
        $statement->execute($params);
        return $statement->fetch(\PDO::FETCH_ASSOC);
        //print_r($statement->fetch(\PDO::FETCH_ASSOC));
    }

    // public function update($sql, $title, $comment, $id)
    // {
    //   $statement = $this->connection->prepare($sql);
    //   if (!$statement) return false;
    //   $statement->bindParam(':title', $title);
    //   $statement->bindParam(':description', $comment);
    //   $statement->bindParam(':id', $id);
    //   $statement->execute();
    //   return $statement->fetch(\PDO::FETCH_ASSOC);
    // }

    // public function delete($id)
    // {
    //   // code...
    // }
}
