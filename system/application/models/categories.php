<?php

class Categories extends Doctrine_Record {

    public function setTableDefinition() {
        $this -> hasColumn('Category_name', 'varchar', 25);
        $this -> hasColumn('Description', 'varchar', 250);
    }

    public function setUp() {
        $this -> setTableName('categories');
        $this -> hasMany('Businesses as Businesses', array('local' => 'id', 'foreign' => 'category'));
    }//end setUp

    public function getAll() {
        $query = Doctrine_Query::create() -> select("*") -> from("categories");
        $categoryData = $query -> execute();
        return $categoryData;
    }//end getall

    public function getAllHydrated() {
        $query = Doctrine_Query::create() -> select("Category_name,Description") -> from("categories");
        $categoryData = $query -> execute(array(), Doctrine::HYDRATE_ARRAY);
        return $categoryData;
    }

    public function getIdName() {
        $query = Doctrine_Query::create() -> select("id,Category_name") -> from("categories");
        $categoryData = $query -> execute();
        return $categoryData;
    }//end getall
    
    public function getCategory($id) {
        $query = Doctrine_Query::create() -> select("*") -> from("Categories") -> where("id = '$id'");
        $categoryData = $query -> execute();
        return $categoryData;
    }    
}
?>