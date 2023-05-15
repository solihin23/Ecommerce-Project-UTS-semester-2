<?php
require_once 'Database.php';
require_once 'Model.php';

class Customer extends Model
{
    // Properties
    private $id;
    private $name;
    private $email;
    private $phone;
    private $gender;
    private $address;
    private $card_id;

    public function __construct($id = null, $name = null, $email = null, $phone = null, $gender = null, $address = null, $card_id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->address = $address;
        $this->card_id = $card_id;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getAddress()
    {
        return ucwords($this->address);
    }

    public function getCardId()
    {
        return $this->card_id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setCardId($card_id)
    {
        $this->card_id = $card_id;
    }

    public static function where($column, $operator, $value)
    {
        $db = new Database;
        $db->query("SELECT * FROM customer WHERE $column $operator :$column");
        $db->bind(":$column", $value);
        return $db->fetchAll();
    }

    public static function all()
    {
        $db = new Database;
        $db->query('SELECT customer.*, card.name as card_name FROM customer INNER JOIN card ON customer.card_id = card.id');
        return $db->fetchAll();
    }

    public static function with($table)
    {
        $db = new Database;
        $db->query("SELECT customer.*, card.name as card_name FROM customer INNER JOIN cards ON customer.card_id = cards.id");
        return $db->fetchAll();
    }

    public static function find($id)
    {
        $db = new Database;
        $db->query('SELECT * FROM customer WHERE id = :id');
        $db->bind(':id', $id);
        return $db->fetch();
    }

    public static function get()
    {
        $db = new Database;
        $db->query('SELECT * FROM customer');
        return $db->fetchAll();
    }

    public static function create($data)
    {
        $db = new Database;
        $db->query('INSERT INTO customer (name, email, phone, gender, address, card_id) VALUES (:name, :email, :phone, :gender, :address, :card_id)');
        $db->bind(':name', $data['name']);
        $db->bind(':email', $data['email']);
        $db->bind(':phone', $data['phone']);
        $db->bind(':gender', $data['gender']);
        $db->bind(':address', $data['address']);
        $db->bind(':card_id', $data['card_id']);
        return $db->execute();
    }

    public static function update($data)
    {
        $db = new Database;
        $db->query('UPDATE customer SET name = :name, email = :email, phone = :phone, gender = :gender, address = :address, card_id = :card_id WHERE id = :id');
        $db->bind(':name', $data['name']);
        $db->bind(':email', $data['email']);
        $db->bind(':phone', $data['phone']);
        $db->bind(':gender', $data['gender']);
        $db->bind(':address', $data['address']);
        $db->bind(':card_id', $data['card_id']);
        $db->bind(':id', $data['id']);
        return $db->execute();
    }

    public static function delete($id)
    {
        $db = new Database;
        $db->query('DELETE FROM customer WHERE id = :id');
        $db->bind(':id', $id);
        return $db->execute();
    }
}
