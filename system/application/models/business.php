<?php

class Businesses extends Doctrine_Record {

    public function setTableDefinition() {
        $this -> hasColumn('Title', 'varchar', 50);
        $this -> hasColumn('Business_name', 'varchar', 100);
        $this -> hasColumn('Coordinate', 'varchar', 25);
        $this -> hasColumn('City', 'int', 15);
        $this -> hasColumn('Category', 'int', 15);
        $this -> hasColumn('Active', 'int', 2);
        $this -> hasColumn('Building', 'varchar', 25);
        $this -> hasColumn('Floor', 'varchar', 15);
        $this -> hasColumn('Road', 'varchar', 25);
        $this -> hasColumn('Box', 'varchar', 25);
        $this -> hasColumn('Telephone', 'varchar', 15);
        $this -> hasColumn('Fax', 'varchar', 15);
        $this -> hasColumn('Mobile', 'varchar', 15);
        $this -> hasColumn('Email', 'varchar', 20);
        $this -> hasColumn('Website', 'varchar', 25);
    }

    public function setUp() {

        $this -> hasOne('Cities', array('local' => 'city', 'foreign' => 'id'));
        $this -> setTableName('Businesses');
        $this -> hasOne('Categories', array('local' => 'category', 'foreign' => 'id'));
    }//end setUp

    public function getAll() {
        $query = Doctrine_Query::create() -> select("*") -> from("Businesses");
        $businessData = $query -> execute();
        return $businessData;
    }//end getall

    public function getBusiness($id) {
        $query = Doctrine_Query::create() -> select("*") -> from("Businesses") -> where("id = '$id'");
        $businessData = $query -> execute();
        return $businessData;
    }

    public static function getTotalNumber() {
        $query = Doctrine_Query::create() -> select("COUNT(*) as Total_Businesses") -> from("Businesses") -> where("Active = '0'");
        $count = $query -> execute();
        return $count[0] -> Total_Businesses;
    }

    public function getPagedBusinesses($offset, $items) {
        $query = Doctrine_Query::create() -> select("*") -> from("Businesses")-> orderBy("Business_name") -> offset($offset) -> limit($items);
        $businessData = $query -> execute();
        return $businessData;
    }

    
}
?>