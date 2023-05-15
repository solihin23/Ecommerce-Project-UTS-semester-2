<?php
require_once 'Model.php';
require_once 'Database.php';

class ProductType extends Model
{
    // Properties
    private $name;

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    // Methods
    public function getName()
    {
        return ucwords($this->name);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // Static Methods
    public static function all()
    {
        $db = new Database;
        $db->query("SELECT * FROM product_type");
        $db->execute();
        return $db->fetchAll();
    }

    public static function find($id)
    {
        $db = new Database;
        $db->query("SELECT * FROM product_type WHERE id = :id");
        $db->bind(':id', $id);
        return $db->fetch();
    }

    public static function create($data)
    {
        $db = new Database;
        $db->query("INSERT INTO product_type (name) VALUES (:name)");
        $db->bind(':name', $data['name']);
        $db->execute();
        return $db->rowCount();
    }

    public static function update($data)
    {
        $db = new Database;
        $db->query("UPDATE product_type SET name = :name WHERE id = :id");
        $db->bind(':name', $data['name']);
        $db->bind(':id', $data['id']);
        $db->execute();
        return $db->rowCount();
    }

    public static function delete($id)
    {
        $db = new Database;
        $db->query("DELETE FROM product_type WHERE id = :id");
        $db->bind(':id', $id);
        $db->execute();
        return $db->rowCount();
    }
}
