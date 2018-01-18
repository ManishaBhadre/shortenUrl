<?php  
	
	//include database connection and functions.php file
	include 'dbh.php';
	include 'functions.php';
	
	//create random id from 111 to 999 which we use to add in short url
	$id 	= rand(111,999);
	//get user entered long url 
	$url 	= $_POST['url']; 
	//if id already exists then generate new id
	if(idExists($id) == true){
		$id = rand(111,999);
	}
	//it check already shorten url and if is already shorten then call getUrlID function in functions.php and using echo generate the same shorten url  using same id.
	if(urlHasBeenShortened($url)){
		echo 'http://localhost/short?id=' . getURLID($url);
		//echo getURLID($url);
		return true;
	}
    //call insertID function in functions.php where we store the random id and long url in database.
	insertID($id, $url);
	
	echo 'http://localhost/short?id=' . $id;

	//echo $id;
?>