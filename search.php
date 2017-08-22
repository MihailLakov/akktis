<?php

require 'config.php';
require 'PDOdb.php';


if(isset($_POST['term']) && isset ($_POST['field'])){    
   $field = filter_var($_POST['field'],FILTER_SANITIZE_STRING);
   $term = filter_var($_POST['term'],FILTER_SANITIZE_STRING);
   
   echo search($field,$term);
}

function search($field,$term){
    $connection = new PDOdb();
    $res = $connection->getSearchResults($field,$term);
    return json_encode($res);
}