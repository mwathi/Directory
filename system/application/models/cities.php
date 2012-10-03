<?php

class Cities extends Doctrine_Record {

    public function setTableDefinition() {
        $this -> hasColumn('City_name', 'varchar', 25);
        $this -> hasColumn('Coordinate', 'varchar', 25);
    }

    public function setUp() {
        $this -> hasMany('Businesses as Business', array('local' => 'id', 'foreign' => 'city'));
        $this -> setTableName('cities');
    }//end setUp

    public function getAll() {
        $query = Doctrine_Query::create() -> select("*") -> from("cities");
        $cityData = $query -> execute();
        return $cityData;
    }//end getall

    public function getIdName() {
        $query = Doctrine_Query::create() -> select("id,City_name") -> from("cities");
        $cityData = $query -> execute();
        return $cityData;
    }//end getall

    public function getAllHydrated() {
        $query = Doctrine_Query::create() -> select("City_name,Coordinate") -> from("cities");
        $cityData = $query -> execute(array(), Doctrine::HYDRATE_ARRAY);
        return $cityData;
    }

    public function getCity($id) {
        $query = Doctrine_Query::create() -> select("*") -> from("Cities") -> where("id = '$id'");
        $cityData = $query -> execute();
        return $cityData;
    }

    public static function getTotalNumber() {
        $query = Doctrine_Query::create() -> select("COUNT(*) as Total_Cities") -> from("Cities");
        $count = $query -> execute();
        return $count[0] -> Total_Cities;
    }

    public function getPagedCities($offset, $items) {
        $query = Doctrine_Query::create() -> select("*") -> from("Cities") -> orderBy("City_name") -> offset($offset) -> limit($items);
        $cityData = $query -> execute();
        return $cityData;
    }

}
?>