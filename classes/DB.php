<?php

// class will be used for databse related functionalities 
class DB
{
    private $db;

    // other db instance can be use by passing var $db_instance
    public function __construct($db_instance = null)
    {
        global $mysqli_db;
        if (!empty($db_instance)) {
            /* other instance setting, then assign in $db */
        }
        $this->db = $mysqli_db;
    }

    /**
     * Execute a query & return the resulting data as an array of assoc arrays
     * @param string $sql query to execute
     * @return boolean|array array of associative arrays - query results for select
     *     otherwise true or false for insert/update/delete success
     */
    public function query($sql)
    {
        $result = $this->db->query($sql);
        if (!is_object($result)) {
            return $result;
        }
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
