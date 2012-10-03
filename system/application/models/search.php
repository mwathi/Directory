<?php

class Search extends Model {
    function Search() {
        parent::Model();
        $this -> load -> database();
    }

    function find($terms, $start = 0, $results_per_page = 0) {
        if ($results_per_page > 0) {
            $limit = "LIMIT $start, $results_per_page";
        } else {
            $limit = '';
        }

        $sql = "SELECT b.business_name AS Name,c.category_name 
		AS Category,d.city_name AS Location FROM businesses b, 
		categories c, cities d WHERE  (b.business_name = ?  or 
		d.city_name = ?)  and b.category = c.id and b.city = d.id > 0
				$limit";
        $query = $this -> db -> query($sql, array($terms, $terms));
        return $query -> result();
    }

    function count_search_results($terms) {
        $sql = "SELECT COUNT(*) AS count
				FROM businesses b, 
        categories c, cities d WHERE  (b.business_name = ?  or 
        d.city_name = ?)  and b.category = c.id and b.city = d.id";
        $query = $this -> db -> query($sql, array($terms, $terms));
        return $query -> row() -> count;
    }

}