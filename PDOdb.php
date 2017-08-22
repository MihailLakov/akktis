<?php

class PDOdb{
    
    private $dbh;
    public function __construct() {
        try{
            $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        } catch (PDOException $err) {  
            echo "Can't establish conenction to the database <br> ";
            echo $err->getMessage();
        }        
    }
 
    public function getDbh(){        
        return $this->dbh;
    }   
    
    /**
     * Search a database field based on a term
     * 
     * @param string $dbField
     * @param string $term
     * @return mixed String | Boolean
     */
    public function getSearchResults($dbField,$term){
        try{
            $statement = $this->getDbh()->prepare("SELECT * FROM users WHERE $dbField LIKE :term LIMIT " . MAX_RESULTS);  
            $statement->bindParam(':term', $term, PDO::PARAM_STR);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        } catch(Exception $err){
            echo 'Unable to execute query';
        }        
    }
}