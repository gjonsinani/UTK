<?php
require_once "connection.php";

$id=$_REQUEST['ID_pikaT'];	//get delete_id and store in $id variable
		
		$select_stmt= $db->prepare('SELECT * FROM pikatturistike WHERE ID_pikaT =:id');	//sql select query
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute();
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
		unlink("upload/".$row['Foto1']); //unlink function permanently remove your file
		unlink("upload/".$row['Foto2']);
		unlink("upload/".$row['Foto3']);
		unlink("upload/".$row['Foto4']);
		
		//delete an orignal record from db
		$delete_stmt = $db->prepare('DELETE FROM pikatturistike WHERE ID_pikaT =:id');
		$delete_stmt->bindParam(':id',$id);
		$delete_stmt->execute();
		
		header("Location:fshi_pikeT.php");
?>
