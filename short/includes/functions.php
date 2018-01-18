<?php  
	//function to check id already exists
	function idExists($id){
		
		include 'dbh.php';
		$row = $conn->query("SELECT * FROM urls WHERE id = '$id'");

		if($row->num_rows > 0){
			return true;
		} else {
			return false;
		}
	}
	// To check long Url is already been shortened
	function urlHasBeenShortened($url){
		
		include 'dbh.php';
		$row = $conn->query("SELECT * FROM urls WHERE link_to_page = '$url'");

		if($row->num_rows > 0){
			return true;
		} else {
			return false;
		}
	}
	//To return id to shorten the long url when long url is already been exists in db 
	function getURLID($url){
		
		include 'dbh.php';
		$row = $conn->query("SELECT id FROM urls WHERE link_to_page = '$url'");

		return $row->fetch_assoc()['id'];
		
	}
    //Insert id and url in database
	function insertID($id, $url){
		
		include 'dbh.php';
		$conn->query("INSERT INTO urls (id, link_to_page) VALUES ('$id', '$url')");

		if(strlen($conn->error) == 0){
			return true;
		}
	}
	//To return long url from short url

	function getUrlLocation($id){
		
		include 'dbh.php';
		$row = $conn->query("SELECT link_to_page FROM urls WHERE id = '$id'");

		return $row->fetch_assoc()['link_to_page'];
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>