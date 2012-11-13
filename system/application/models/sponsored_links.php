<?php

class Sponsored_Links extends Doctrine_Record {

    public function setTableDefinition() {
        $this -> hasColumn('Name', 'varchar', 25);
        $this -> hasColumn('Link', 'varchar', 200);
        $this -> hasColumn('Description', 'varchar', 250);
    }

    public function setUp() {
        $this -> setTableName('Sponsored_Links');                       
    }//end setUp

    public function getAll() {
        $query = Doctrine_Query::create() -> select("*") -> from("Sponsored_Links") -> limit('10');
        $linkData = $query -> execute();
        return $linkData;
    }//end getall
    
}
?>