<?php

class Membership extends Doctrine_Record {

    public function setTableDefinition() {
        $this -> hasColumn('Membership', 'varchar', 15);
        $this -> hasColumn('Description', 'varchar', 250);
    }

    public function setUp() {
        $this -> setTableName('membership');            
           
    }//end setUp

    public function getAll() {
        $query = Doctrine_Query::create() -> select("*") -> from("membership");
        $memberData = $query -> execute();
        return $memberData;
    }//end getall
    
}
?>