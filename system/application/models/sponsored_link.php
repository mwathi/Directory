<?php

class Sponsored_Link extends Doctrine_Record {

    public function setTableDefinition() {
        $this -> hasColumn('Name', 'varchar', 25);
        $this -> hasColumn('Link', 'varchar', 200);
        $this -> hasColumn('Description', 'varchar', 250);
    }

    public function setUp() {
        $this -> setTableName('sponsored_link');
    }//end setUp

    public function getAll() {
        $query = Doctrine_Query::create() -> select("*") -> from("sponsored_link") -> limit('10');
        $linkData = $query -> execute();
        return $linkData;
    }//end getall

    public function getPagedSponsors($offset, $items) {
        $query = Doctrine_Query::create() -> select("*") -> from("sponsored_link") -> orderBy("Name") -> offset($offset) -> limit($items);
        $sponsorData = $query -> execute();
        return $sponsorData;
    }

    public static function getTotalNumber() {
        $query = Doctrine_Query::create() -> select("COUNT(*) as Total_Sponsors") -> from("sponsored_link");
        $count = $query -> execute();
        return $count[0] -> Total_Sponsors;
    }

    public function getSponsor($id) {
        $query = Doctrine_Query::create() -> select("*") -> from("sponsored_link") -> where("id = '$id'");
        $sponsorData = $query -> execute();
        return $sponsorData;
    }

}
?>