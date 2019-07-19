<?php
namespace Max\NotesPro\Models;

use Max\NotesPro\Core\DB;
use Max\NotesPro\Core\Repository;
use Max\NotesPro\Models\Picture;

class NotesRepository implements Repository
{
    private $db;
    public function __construct()
    {
        $this->db = DB::getDB();
    }

    public function getAll()
    {
        // возвращает все картины
        $sql = 'SELECT * FROM notes';
        return $this->db->getAll($sql);
    }

    public function getById(int $id)
    {
        // получаем картину по id
        $sql = 'SELECT * FROM notes WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    public function save($params)
    {
        $sql = 'INSERT INTO notes
                (title, description, date, user_id)
                VALUES (:title, :description, :date, :user_id)';
        return $this->db->nonSelectQuery($sql, $params);
    }

    public function delete($id)
    {
      $sql = 'DELETE FROM notes WHERE id = :id';
      $params = ['id'=>$id];
      return $this->db->nonSelectQuery($sql, $params);
    }

    public function update($title, $comment, $id)
    {
      $sql = 'UPDATE notes SET title = :title, description = :description WHERE id = :id';
      $params = [
        'id'=>$id,
        'title'=> $title,
        'description' =>$comment
    ];
      return $this->db->nonSelectQuery($sql, $params);
      //print_r($this->db->nonSelectQuery($sql, $params));
    }


}
