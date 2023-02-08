<?php
class GameDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Connection::getInstance()->getPDO();
    }

    public function getGame($id)
    {
        $sql = "SELECT * FROM game WHERE id = :id";
    }
}
