<!DOCTYPE html>
<html>
<head>
	<title>new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<nav class="menu">
	<ul>
		<li><a href="home.php"> Home</a></li>
		<li><a href="gallary.php"> Assistant </a></li>
		<li><a href="products.php">Products</a></li>
		<li><a href="about.php"> Contact</a></li>
		<li><a href="admin.php"> Admin
    </a></li>
		
	</ul>

	<?php


  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "clothes";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


    if (isset($_POST['add'])) {
      // Initialize message variable
     

    $cloth_code = $_POST['cloth_code'];
    $image = $_POST['image'];
    $image_text = $_POST['image_text'];
    $color = $_POST['color'];
    $pattern = $_POST['pattern'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    


    $sql = "INSERT INTO items( `cloth_code`, `image`, `image_text`, `color`, `pattern`, `price`,`location`)
VALUES ('$cloth_code',' $image',' $image_text',' $color',' $pattern','$price','$location')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    
   }   
      

?>

        <form class="form-horizontal half-length" role="form" name="form1" id="form1" method="post" action="admin.php">
            <div class="box box-success">
                <div align="center" class="box-header with-border">
                <h3 class="box-title">Add product items</h3>
                </div><br>
        
            

                <div class="form-group">
            <label for="input-text" class="control-label col-md-3">Cloth_code</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="cloth_code" name="cloth_code" placeholder="cloth_code" required >
              </div>
        </div>

                <div class="form-group">
            <label for="input-text" class="control-label col-md-3">item</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="image" name="image" placeholder="item" required >
            </div>
        </div>

        <!--<input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image">
    </div>
    <div>
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        name="image_text" 
        placeholder="Say something about this image..."></textarea>
    </div>-->


                 <div class="form-group">
            <label for="input-text" class="control-label col-md-3">image</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="image_text" name="image_text" placeholder="image_text" required >
            </div>
        </div>

  <div class="form-group">
            <label for="input-text" class="control-label col-md-3">color</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="color" name="color" placeholder="color" required >
            </div>
        </div>


   <div class="form-group">
            <label for="input-text" class="control-label col-md-3">pattern</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="pattern" name="pattern" placeholder="pattern" required >
            </div>
        </div>

   <div class="form-group">
            <label for="input-text" class="control-label col-md-3">price</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="price" name="price" placeholder="price" required >
            </div>
        </div>

<div class="form-group">
            <label for="input-text" class="control-label col-md-3">location</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="location" name="location" placeholder="location" required >
            </div>
        </div>



                <div class="form-group">
                  <div align="center" class="col-xs-12">
                 <button type="submit" class="btn btn-default" name="add" >Add</button> &nbsp;&nbsp;
                
                 <button type="submit" class="btn btn-info" name="btnRest">Reset</button>
                  
     
                   <input type="hidden" name ="index" id="index">
                  </div>
                      
                </div>
                
              
            </div>

                 
                
                
        </form>



</body>

</hlml>