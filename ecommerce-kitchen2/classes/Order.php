<?php
require_once 'Model.php';
require_once 'Database.php';

class Order extends Model
{
    private $id;
    private $order_number;
    private $date;
    private $qty;
    private $total_price;
    private $customer_id;
    private $product_id;

    public function __construct($id = null, $order_number = null, $date = null, $qty = null, $total_price = null, $customer_id = null, $product_id = null)
    {
        $this->id = $id;
        $this->order_number = $order_number;
        $this->date = $date;
        $this->qty = $qty;
        $this->total_price = $total_price;
        $this->customer_id = $customer_id;
        $this->product_id = $product_id;
    }

    // Methods
    public function getId()
    {
        return $this->id;
    }

    public function getOrderNumber()
    {
        return $this->order_number;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function getTotalPrice()
    {
        return $this->total_price;
    }

    public function getCustomerId()
    {
        return $this->customer_id;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function setOrderNumber($order_number)
    {
        $this->order_number = $order_number;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    public function setTotalPrice($total_price)
    {
        $this->total_price = $total_price;
    }

    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    public static function all()
    {
        $db = new Database();
        $db->query('SELECT orders.*, customer.name as customer_name, product.name as product_name FROM orders INNER JOIN customer ON orders.customer_id = customer.id INNER JOIN product ON orders.product_id = product.id');
        $db->execute();
        return $db->fetchAll();
    }

    public static function find($id)
    {
        $db = new Database();
        $db->query('SELECT * FROM orders WHERE id = :id');
        $db->bind(':id', $id);
        return $db->fetch();
    }

    public static function get()
    {
        $db = new Database();
        $db->query('SELECT *, product.name AS product_name, customer.name AS customer_name FROM orders INNER JOIN product ON orders.product_id = product.id INNER JOIN customer ON orders.customer_id = customer.id');
        $db->execute();
        return $db->fetchAll();
    }

    public static function create($data)
    {
        $db = new Database();
        $db->query('INSERT INTO orders (order_number, date, qty, total_price, customer_id, product_id) VALUES (:order_number, :date, :qty, :total_price, :customer_id, :product_id)');
        $db->bind(':order_number', $data['order_number']);
        $db->bind(':date', $data['date']);
        $db->bind(':qty', $data['qty']);
        $db->bind(':total_price', $data['total_price']);
        $db->bind(':customer_id', $data['customer_id']);
        $db->bind(':product_id', $data['product_id']);
        return $db->execute();
    }

    public static function update($data)
    {
        $db = new Database();
        $db->query('UPDATE orders SET order_number = :order_number, date = :date, qty = :qty, total_price = :total_price, customer_id = :customer_id, product_id = :product_id WHERE id = :id');
        $db->bind(':id', $data['id']);
        $db->bind(':order_number', $data['order_number']);
        $db->bind(':date', $data['date']);
        $db->bind(':qty', $data['qty']);
        $db->bind(':total_price', $data['total_price']);
        $db->bind(':customer_id', $data['customer_id']);
        $db->bind(':product_id', $data['product_id']);
        return $db->execute();
    }

    public static function delete($id)
    {
        $db = new Database();
        $db->query('DELETE FROM orders WHERE id = :id');
        $db->bind(':id', $id);
        return $db->execute();
    }
}
