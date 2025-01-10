<?php

require_once __DIR__ . "/../../vendor/autoload.php";
include "database.class.php";

class PollingUnit extends Database
{

    private $uniqueId;
    private $idArr = [];

    public function getUniqueId()
    {
        $sql = "SELECT uniqueid FROM polling_unit";
        $result = $this->Connection()->query($sql);
        $this->idArr = $result->fetchAll(PDO::FETCH_ASSOC); //sets the idArr
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getIdArr()
    {
        return $this->idArr;
    }

    public function displayIdArr()
    {
        $arrayId = $this->idArr;
        foreach ($arrayId as $val) {
            foreach ($val as $id) {
                echo $id . "<br>";
            }
        }
    }
}

$poll = new PollingUnit;

$pollId = $poll->getUniqueId();
$poll->displayIdArr();

echo "<pre>";
print_r($poll->getUniqueId());
echo "</pre>";
