<?php
require_once 'Model.php';

require_once 'Database.php';

class Supplier
{
    private $id;
    private $name;
    private $phone;
    private $address;
    private $contact_name;

    public function __construct($id = null, $name = null, $phone = null, $address = null, $contact_name = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->contact_name = $contact_name;
    }

    // Methods
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return ucwords($this->name);
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getAddress()
    {
        return ucwords($this->address);
    }

    public function getContactName()
    {
        return ucwords($this->contact_name);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setContactName($contact_name)
    {
        $this->contact_name = $contact_name;
    }

    // Static Methods
    public static function all()
    {
        $db = new Database;
        $db->query("SELECT * FROM supplier");
        $db->execute();
        return $db->fetchAll();
    }

    public static function find($id)
    {
        $db = new Database;
        $db->query("SELECT * FROM supplier WHERE id = :id");
        $db->bind(':id', $id);
        return $db->fetch();
    }

    public static function create($data)
    {
        $db = new Database;
        $db->query("INSERT INTO supplier (name, phone, address, contact_name) VALUES (:name, :phone, :address, :contact_name)");
        $db->bind(':name', $data['name']);
        $db->bind(':phone', $data['phone']);
        $db->bind(':address', $data['address']);
        $db->bind(':contact_name', $data['contact_name']);
        $db->execute();
        return $db->rowCount();
    }

    public static function update($data)
    {
        $db = new Database;
        $db->query("UPDATE supplier SET name = :name, phone = :phone, address = :address, contact_name = :contact_name WHERE id = :id");
        $db->bind(':name', $data['name']);
        $db->bind(':phone', $data['phone']);
        $db->bind(':address', $data['address']);
        $db->bind(':contact_name', $data['contact_name']);
        $db->bind(':id', $data['id']);
        $db->execute();
        return $db->rowCount();
    }

    public static function delete($id)
    {
        $db = new Database;
        $db->query("DELETE FROM supplier WHERE id = :id");
        $db->bind(':id', $id);
        $db->execute();
        return $db->rowCount();
    }
}
