<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Register Confirmation</title>
</head>
<body>
  <h2>Thank you for Registering!</h2>

<?php
// Form validation
 if(isset($_POST['email']) && $_POST['email'] !=''){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone'];
  $city = $_POST['city'];
  $postal_code = $_POST['pcode'];
  $size= $_POST['size'];
  $heard = $_POST['heard'];
  $price = $_POST['price'];
  $inlineRadioOptions = $_POST['inlineRadioOptions'];
  
        }

}
 // Connect to the database
  $dbc = mysqli_connect('localhost', 'danieldev28', 'Z1dUUEA8dz28B03Q', 'registration_db')
    or die('Error connecting to MySQL server.');
    
// Update the data in the database
  $query = "INSERT INTO signup_record  (first_name, last_name, email, phone_number, " .
    "city, postal_code, size, heard, price, inlineRadioOptions) " .
    "VALUES ('$first_name', '$last_name', '$email', '$phone_number','$city', '$postal_code', " .
    "'$size', '$heard','$price','$inlineRadioOptions')";
// Query the database
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

// Close connection string
  mysqli_close($dbc);

?>

<script> location.replace("index.html"); </script>
</body>
</html>

