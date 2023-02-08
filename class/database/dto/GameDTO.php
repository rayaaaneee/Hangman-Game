<?php

class GameDTO
{
    private $db;

    public function __construct()
    {
        $this->db = Connection::getInstance()->getPDO();
    }

    public function insert($object)
    {
        $req = $this->db->prepare("INSERT INTO partie (id, joueur1, joueur2) VALUES (:id, :joueur1, :joueur2)");

        $req->execute(array(
            'id' => $object->getId(),
            'joueur1' => $object->getPseudo1(),
            'joueur2' => $object->getPseudo2(),
            'mot' => $object->getWord(),
            'victoire' => $object->getWinnerPseudo(),
        ));
    }
}
