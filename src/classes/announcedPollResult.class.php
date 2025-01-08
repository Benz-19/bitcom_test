<?php

use Hp\BitcomTest\Database;

include "pollingUnit.class.php";
require_once __DIR__ . "/../../vendor/autoload.php";


class AnnouncedPollResult extends Database
{
    private $id;

    public function DBAnnouncedPollResult()
    {
        $sql = "SELECT party_abbreviation, party_score, entered_by_user, date_entered, user_ip_address FROM announced_pu_results WHERE polling_unit_uniqueid = {$this->getId()}";

        $result = $this->Connection()->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getId()
    {
        // $this->id = $this->getIdArr();

        $arrayId = $this->id;
        foreach ($arrayId as $key => $val) {
            foreach ($val as $id) {
                return $id;
            }
        }
    }
}


$test = new AnnouncedPollResult;
if ($test->DBAnnouncedPollResult()) {
    echo "yes";
}

echo "<pre>";
print_r($test->DBAnnouncedPollResult());
echo "</pre>";
