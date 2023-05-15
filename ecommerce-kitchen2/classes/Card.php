<?php
require_once 'Database.php';
require_once 'Model.php';

class Card extends Model
{
    private $id;
    private $code;
    private $name;
    private $discount;
    private $member_fee;

    public function __construct($id = null, $code = null, $name = null, $discount = null, $member_fee = null)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->discount = $discount;
        $this->member_fee = $member_fee;
    }

    // Methods
    public function getId()
    {
        return $this->id;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getMemberFee()
    {
        return $this->member_fee;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function setMemberFee($member_fee)
    {
        $this->member_fee = $member_fee;
    }

    public static function where($column, $operator, $value)
    {
        $db = new Database;
        $db->query("SELECT * FROM card WHERE $column $operator :$column");
        $db->bind(":$column", $value);
        return $db->fetchAll();
    }

    public static function all()
    {
        $db = new Database;
        $db->query('SELECT * FROM card');
        return $db->fetchAll();
    }

    public static function with($table)
    {
        $db = new Database;
        $db->query("SELECT * FROM card INNER JOIN $table ON card.id = $table.card_id");
        return $db->fetchAll();
    }

    public static function find($id)
    {
        $db = new Database;
        $db->query('SELECT * FROM card WHERE id = :id');
        $db->bind(':id', $id);
        return $db->fetch();
    }

    public static function get()
    {
        $db = new Database;
        $db->query('SELECT * FROM card');
        return $db->fetchAll();
    }

    public static function create($data)
    {
        $db = new Database;
        $db->query('INSERT INTO card (code, name, discount, member_fee) VALUES (:code, :name, :discount, :member_fee)');
        $db->bind(':code', $data['code']);
        $db->bind(':name', $data['name']);
        $db->bind(':discount', $data['discount']);
        $db->bind(':member_fee', $data['member_fee']);
        return $db->execute();
    }

    public static function update($data)
    {
        $db = new Database;
        $db->query('UPDATE card SET code = :code, name = :name, discount = :discount, member_fee = :member_fee WHERE id = :id');
        $db->bind(':id', $data['id']);
        $db->bind(':code', $data['code']);
        $db->bind(':name', $data['name']);
        $db->bind(':discount', $data['discount']);
        $db->bind(':member_fee', $data['member_fee']);
        return $db->execute();
    }

    public static function delete($id)
    {
        $db = new Database;
        $db->query('DELETE FROM card WHERE id = :id');
        $db->bind(':id', $id);
        return $db->execute();
    }
}
