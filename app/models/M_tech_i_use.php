<?php

class M_tech_i_use
{
    private $table = 'tbl_category';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTech()
    {
        $this->db->query('SELECT * FROM tbl_category ORDER BY id DESC LIMIT 4');
        return $this->db->resultSet();
    }
}
