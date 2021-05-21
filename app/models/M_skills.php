<?php

class M_skills
{
    private $table = 'tbl_category';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSkills()
    {
        $this->db->query('SELECT * FROM tbl_skills ORDER BY id DESC LIMIT 6');
        return $this->db->resultSet();
    }
}
