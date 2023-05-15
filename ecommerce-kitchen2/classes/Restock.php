<?php
require_once 'Model.php';
require_once 'Database.php';
class Restock extends Model
{
    // Properties
    private $id;
    private $restock_number;
    private $date;
    private $qty;
    private $supplier_id;

    public function __construct($id = null, $restock_number = null, $date = null, $qty = null, $supplier_id = null)
    {
        $this->id = $id;
        $this->restock_number = $restock_number;
        $this->date = $date;
        $this->qty = $qty;
        $this->supplier_id = $supplier_id;
    }

    // Methods
    public function getId()
    {
        return $this->id;
    }

    public function getRestockNumber()
    {
        return $this->restock_number;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    public function setRestockNumber($restock_number)
    {
        $this->restock_number = $restock_number;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    public function setSupplierId($supplier_id)
    {
        $this->supplier_id = $supplier_id;
    }

    // Static Methods

    public static function all()
    {
        $db = new Database;
        $db->query("SELECT *, supplier.name AS supplier_name FROM restock INNER JOIN supplier ON restock.supplier_id = supplier.id");
        $db->execute();
        return $db->fetchAll();
    }

    public static function find($id)
    {
        $db = new Database;
        $db->query("SELECT * FROM restock WHERE id = :id");
        $db->bind(':id', $id);
        $db->execute();
        return $db->fetchAll();
    }

    public static function create($data)
    {
        $db = new Database;
        $db->query("INSERT INTO restock (restock_number, date, qty, supplier_id) VALUES (:restock_number, :date, :qty, :supplier_id)");
        $db->bind(':restock_number', $data['restock_number']);
        $db->bind(':date', $data['date']);
        $db->bind(':qty', $data['qty']);
        $db->bind(':supplier_id', $data['supplier_id']);
        return $db->execute();
    }

    public static function update($data)
    {
        $db = new Database;
        $db->query("UPDATE restock SET restock_number = :restock_number, date = :date, qty = :qty, supplier_id = :supplier_id WHERE id = :id");
        $db->bind(':id', $data['id']);
        $db->bind(':restock_number', $data['restock_number']);
        $db->bind(':date', $data['date']);
        $db->bind(':qty', $data['qty']);
        $db->bind(':supplier_id', $data['supplier_id']);
        return $db->execute();
    }

    public static function delete($id)
    {
        $db = new Database;
        $db->query("DELETE FROM restock WHERE id = :id");
        $db->bind(':id', $id);
        return $db->execute();
    }
}
