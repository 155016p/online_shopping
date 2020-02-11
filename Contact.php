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
		<li><a href="Feedback.php">Products</a></li>
		<li><a href="about.php"> Contact</a></li>
		<li><a href="Contact.php"> Admin
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
     $msg = "";

     $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

   
    

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }


    $cloth_code = $_POST['cloth_code'];
    $image = $_POST['image'];
    $image_text = $_POST['image_text'];
    $color = $_POST['color'];
    $pattern = $_POST['pattern'];
    $price = $_POST['price'];
    


    $sql = "INSERT INTO items( `cloth_code`, `image`, `image_text`, `color`, `pattern`, `price`)
VALUES ('$cloth_code',' $image',' $image_text',' $color',' $pattern','$price')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    
   }   
      

?>

        <form class="form-horizontal half-length" role="form" name="form1" id="form1" method="post" action="contact.php">
            <div class="box box-success">
                <div align="center" class="box-header with-border">
                <h3 class="box-title">Add item</h3>
                </div><br>
        
            

                <div class="form-group">
            <label for="input-text" class="control-label col-md-3">Cloth_code</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="cloth_code" name="cloth_code" placeholder="cloth_code" required >
              </div>
        </div>

                <!-- <div class="form-group">
            <label for="input-text" class="control-label col-md-3">item</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="item" name="item" placeholder="item" required >
            </div>
        </div>-->

        <input type="hidden" name="size" value="1000000">
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
    </div>


                <!-- <div class="form-group">
            <label for="input-text" class="control-label col-md-3">image</label>
            <div class="col-xs-5">
            <input type="text" class="form-control" id="image" name="image" placeholder="image" required >
            </div>
        </div>-->

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
                  <div align="center" class="col-xs-12">
                 <button type="submit" class="btn btn-default" name="add" >Add</button> &nbsp;&nbsp;
                <a  class="btn btn-primary btn-lg" href="company_table_view.php">Cancel </a>
                 <button type="submit" class="btn btn-info" name="btnRest">Reset</button>
                  
     
                   <input type="hidden" name ="index" id="index">
                  </div>
                      
                </div>
                
              
            </div>

                 
                
                
        </form>



</body>

</hlml>