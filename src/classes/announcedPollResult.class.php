<?php

include "pollingUnit.class.php";
// include "database.class.php";


class AnnouncedPollResult extends PollingUnit
{
    private $ArrayId;

    public function DBAnnouncedPollResult()
    {
        $Ids = [];
        foreach ($this->getPollingArr() as $test => $value) {
            foreach ($value as $id) {
                echo $id;
            }
        }

        // $sql = "SELECT party_abbreviation, party_score, entered_by_user, date_entered, user_ip_address 
        //                 FROM announced_pu_results 
        //                 WHERE polling_unit_uniqueid = {$id}";

        // $result = $this->Connection()->query($sql);
        // return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setPollingArr($ids)
    {

        foreach ($ids as $value) {
            echo "yes";
            foreach ($value as $id) {
                echo $id;
            }
        }
        return $this->ArrayId;
    }
    public function getPollingArr()
    {
        return $this->ArrayId;
    }

    public function displayPollingReultIdArr()
    {
        $arrayId = $this->ArrayId;
        foreach ($arrayId as $val) {
            foreach ($val as $id) {
                echo $id . "<br>";
            }
        }
    }
}

// $ids = new PollingUnit;
// // $this->ArrayId = $ids->getIdArr();
// $ids->displayIdArr();
// echo "<pre>";
// print_r($ids->getIdArr());
// echo "</pre>";
