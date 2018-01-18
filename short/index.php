<?php  
//To get Long Url location from shorten url
	if(isset($_GET['id'])){
		
		include 'includes/functions.php';
		$id  = $_GET['id'];
		$url = getUrlLocation($id);
		header('Location: ' . $url);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css" >
	<title>URL Shortener</title>
</head>
<body>
<div class="container">
  <div class="jumbotron">
    <h1>URL Shortener</h1> 
    <p>Here we can copy the long url and then get short url which redirect to the same page</p> 
  </div>
  </div>
  





<br><br><br>

<div class="text-center">
<div class="row" >
<div class="col-md-4"></div>
<div class="col-md-4" style="background-color:#A3E4D7;">
<p class=" bg-default" style="background-color:#fff;">Copy the short url and paste on new browser and you get the original site</p>
<br>
  <h2>Enter the URL</h2>
  <div class="form-group">
  <h3><input type="text" name="url" class="form-control"> </h3>
  </div>
    <span style="padding:5px;"><input type="submit" value="Shorten My URL!" class="short btn btn-info btn-lg"></span> 
	<br><br>
	<h3 class="errors bg-warning"></h3> 
	<br>
  </div>
  <div class="col-md-4"></div>
  </div>
</div>
<br><br><br><br>
<!-- Table to show assigned urls -->
<div class="text-center">
<div class="row" >
<div class="col-md-1"></div>
<div class="col-md-10">
<h2>Most Frequently Accessed urls</h2><br><br>
<div class ="table-responsive">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>long Url</th>
            <th>Short url</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php 
		 include 'includes/dbh.php';
		 $sql = "SELECT * FROM urls";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){ 
		//while( $row = $sql->fetch()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['link_to_page']; ?></td>
            <td><?php echo 'http://localhost/short?id=' . $row['id']; ?></td>
        </tr>
        <?php 
			}
		}
		?>
    </tbody>
</table>
</div>
</div>
<div class="col-md-1"></div>
</div>
</div>

<!--Table end here -->

	<script type="text/javascript">
		$(document).ready(function(){
		/*when submit clicked we used the ajax post method to pass long url to process.php and from post methods callback function and data variable we get our short url that short url is printed on class error heading3. */
			//$('input[type="submit"]').click(function(e){
			  $('.short').click(function(e){
				e.preventDefault();

				$('.errors').html('');
				var url = $('input[name="url"]').val();
				//when url text field is empty
				if(url.length == 0){
					$('.errors').html('Whoops! Please enter a URL!');
					return false;
				}
				
				//when url text field is contain value
				$.post('includes/process.php', {
					url: url
				}, function(data, textStatus, xhr) {
					var od = data;
					
					
					$('.errors').html('<a href="' + od + '" target="_blank">' + od + '</a>')
					
				});
			});
		});
	</script>

	
	</body>
</html>