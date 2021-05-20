<?php

class m_projects
{
    private $table = 'tbl_food';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProjects()
    {
        $this->db->query('SELECT * FROM tbl_food ORDER BY id DESC LIMIT 6');
        return $this->db->resultSet();
    }
}
