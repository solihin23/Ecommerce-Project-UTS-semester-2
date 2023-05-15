<?php

abstract class Model
{
    protected $db;
    protected $validation;

    public function __construct()
    {
        $this->db = new Database;
        $this->validation = new Validation;
    }

    abstract public static function all();

    abstract public static function find($id);

    abstract public static function create($data);

    abstract public static function update($data);

    abstract public static function delete($id);
}
