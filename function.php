<?php 

function get_total_all_records(){
	 include('database.php');
 $statement = $connection->prepare("SELECT * FROM users");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}


 ?>