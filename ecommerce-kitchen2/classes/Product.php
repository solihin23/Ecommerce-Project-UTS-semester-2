<?php
require_once 'Model.php';
require_once 'Database.php';

class Product extends Model
{
    // Properties
    private $id;
    private $sku;
    private $name;
    private $purchase_price;
    private $sell_price;
    private $stock;
    private $min_stock;
    private $product_type_id;
    private $restock_id;

    public function __construct($id = null, $sku = null, $name = null, $purchase_price = null, $sell_price = null, $stock = null, $min_stock = null, $product_type_id = null, $restock_id = null)
    {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->purchase_price = $purchase_price;
        $this->sell_price = $sell_price;
        $this->stock = $stock;
        $this->min_stock = $min_stock;
        $this->product_type_id = $product_type_id;
        $this->restock_id = $restock_id;
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

    public function getPurchasePrice()
    {
        return $this->purchase_price;
    }

    public function getSellPrice()
    {
        return $this->sell_price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getMinStock()
    {
        return $this->min_stock;
    }

    public function getTypeId()
    {
        return $this->product_type_id;
    }

    public function getRestockId()
    {
        return $this->restock_id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPurchasePrice($purchase_price)
    {
        $this->purchase_price = $purchase_price;
    }

    public function setSellPrice($sell_price)
    {
        $this->sell_price = $sell_price;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function setMinStock($min_stock)
    {
        $this->min_stock = $min_stock;
    }

    public function setTypeId($product_type_id)
    {
        $this->product_type_id = $product_type_id;
    }

    public function setRestockId($restock_id)
    {
        $this->restock_id = $restock_id;
    }

    // Static Methods
    public static function where($column, $operator, $value)
    {
        $db = new Database;
        $db->query('SELECT product.*, product_type.name AS product_type_name, restock.restock_number AS restock_number FROM product INNER JOIN product_type ON product.product_type_id = product_type.id INNER JOIN restock ON product.restock_id = restock.id WHERE ' . $column . ' ' . $operator . ' :' . $column); // 'SELECT * FROM product WHERE ' . $column . ' ' . $operator . ' :' . $column; // 'SELECT * FROM product WHERE sku = :sku
        $db->bind(":$column", $value);
        $db->execute();
        return $db->fetchAll();
    }

    public static function all()
    {
        $db = new Database;
        $db->query('SELECT product.*, product_type.name AS product_type_name, restock.restock_number AS restock_number FROM product INNER JOIN product_type ON product.product_type_id = product_type.id INNER JOIN restock ON product.restock_id = restock.id');
        $db->execute();
        return $db->fetchAll();
    }

    public static function find($id)
    {
        $db = new Database;
        $db->query('SELECT product.*, product_type.name AS product_type_name, restock.restock_number AS restock_number FROM product INNER JOIN product_type ON product.product_type_id = product_type.id INNER JOIN restock ON product.restock_id = restock.id WHERE product.id = :id');
        $db->bind(':id', $id);
        return $db->fetch();
    }

    public static function create($data)
    {
        $db = new Database;
        $db->query("INSERT INTO product (sku, name, purchase_price, sell_price, stock, min_stock, product_type_id, restock_id) VALUES (:sku, :name, :purchase_price, :sell_price, :stock, :min_stock, :product_type_id, :restock_id)");
        $db->bind(':sku', $data['sku']);
        $db->bind(':name', $data['name']);
        $db->bind(':purchase_price', $data['purchase_price']);
        $db->bind(':sell_price', $data['sell_price']);
        $db->bind(':stock', $data['stock']);
        $db->bind(':min_stock', $data['min_stock']);
        $db->bind(':product_type_id', $data['product_type_id']);
        $db->bind(':restock_id', $data['restock_id']);
        return $db->execute();
    }

    public static function update($data)
    {
        $db = new Database;
        $db->query("UPDATE product SET sku = :sku, name = :name, purchase_price = :purchase_price, sell_price = :sell_price, stock = :stock, min_stock = :min_stock, product_type_id = :product_type_id, restock_id = :restock_id WHERE id = :id");
        $db->bind(':id', $data['id']);
        $db->bind(':sku', $data['sku']);
        $db->bind(':name', $data['name']);
        $db->bind(':purchase_price', $data['purchase_price']);
        $db->bind(':sell_price', $data['sell_price']);
        $db->bind(':stock', $data['stock']);
        $db->bind(':min_stock', $data['min_stock']);
        $db->bind(':product_type_id', $data['product_type_id']);
        $db->bind(':restock_id', $data['restock_id']);
        return $db->execute();
    }

    public static function delete($id)
    {
        $db = new Database;
        $db->query("DELETE FROM product WHERE id = :id");
        $db->bind(':id', $id);
        $db->execute();
        return $db->rowCount();
    }
}
