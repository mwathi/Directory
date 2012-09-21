<?php

class Businesses extends Doctrine_Record {

    public function setTableDefinition() {
        $this -> hasColumn('Title', 'varchar', 50);
        $this -> hasColumn('Business_name', 'varchar', 100);
        $this -> hasColumn('Coordinate', 'varchar', 25);
        $this -> hasColumn('City', 'int', 15);
        $this -> hasColumn('Category', 'int', 15);
        $this -> hasColumn('Active', 'int', 2);
    }

    public function setUp() {
        
        $this -> hasOne('Cities', array('local' => 'city', 'foreign' => 'id'));
        $this -> setTableName('businesses');
        $this -> hasOne('Categories', array('local' => 'category', 'foreign' => 'id'));
    }//end setUp

    public function getAll() {
        $query = Doctrine_Query::create() -> select("*") -> from("businesses");
        $businessData = $query -> execute();
        return $businessData;
    }//end getall

    public function getAllHydrated() {
        $query = Doctrine_Query::create() -> select("b.Business_name,b.Title,c.City_name,b.Coordinate,d.Category_name") -> from("businesses b,b.Cities c,b.Categories d");
        $businessData = $query -> execute(array(), Doctrine::HYDRATE_ARRAY);
        return $businessData;
    }

}
?>