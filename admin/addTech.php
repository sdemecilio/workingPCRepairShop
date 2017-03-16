<?php
/**
 * Created by PhpStorm.
 * User: Axum
 * Date: 3/6/2017
 * Time: 1:25 PM
 */


class Tech {
    protected $db;


    public function __construct(PDO $db) {
        $this->db = $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function getAdmins() {
        //Define the query
        $query = "SELECT * FROM login";

        //prepare the statement
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        $result = array();
        foreach($rows as $row) {
            array_push($result, $this->read($row));
        }
        return $result;
    }

}