<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#5bbd53">
    <title>treeG Majan Eye Centre</title>
    <style>

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.formpage {
  background: -webkit-gradient(linear, left bottom, right top, from(#4fff89), to(#85ffad));
  background: linear-gradient(to top right, #4fff89, #85ffad);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background-repeat: no-repeat;
}
.glass {
  background: -webkit-gradient(linear, left bottom, right top, from(rgba(255, 255, 255, 0.7)), to(rgba(255, 255, 255, 0.3)));
  background: linear-gradient(to top right, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.3));
  min-height: 80vh;
  width: 590px;
  padding: 20px 1px;
  border-radius: 10px;
  z-index: 1;
  margin: 30px 0 30px 0;
}

.glassimg{
    display: block;
    text-align: center;
    padding-bottom: 10px;
}

.formheader {
  background: #70e000;
  padding: 20px 10px 20px 10px;
  border-radius: 10px;
  color: white;
  width: 90%;
  margin-right: auto;
  margin-left: auto;
  text-align: center;
}

.glassa{
    margin-top: 30px;
    text-align: center;
    
}

.glassa a{
    padding: 15px;
    background: #c1c1c1;
    border: none;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;

}

.circle1 {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: -webkit-gradient(linear, left bottom, right top, from(rgba(255, 255, 255, 0.9)), to(rgba(255, 255, 255, 0.1)));
  background: linear-gradient(to top right, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.1));
  z-index: 0;
  position: absolute;
  top: 50px;
  right: 0;
}

.circle2 {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: -webkit-gradient(linear, left bottom, right top, from(rgba(255, 255, 255, 0.9)), to(rgba(255, 255, 255, 0.1)));
  background: linear-gradient(to top right, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.1));
  z-index: 0;
  position: absolute;
  bottom: 20px;
  left: 15px;
}

    </style>
</head>
<body>
<?php
$servername = "localhost";
$database = "u168764240_majanfeedback";
$username = "u168764240_treegmajan";
$password = "Barkaoman@1";
$name = $_POST['name'];
$phone = $_POST['phone'];
$place = $_POST['place'];
$email = $_POST['email'];
$reception = $_POST['reception'];
$optometry = $_POST['optometry'];
$doctor = $_POST['doctor'];
$nursing = $_POST['nursing'];
$opticals = $_POST['opticals'];
$cleanliness = $_POST['cleanliness'];
$yourSuggestions = $_POST['yourSuggestions'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO Feedback (date, name, phone, place, email, reception, optometry, doctor, nursing, opticals, cleanliness, yourSuggestions)
VALUES (date("y/m/d h:ia"), $name', '$phone', '$place', '$email', '$reception', '$optometry', '$doctor', '$nursing', '$opticals', '$cleanliness', '$yourSuggestions')";
if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

    <div class="formpage">
        <div class="glass">
            <div class="glassimg">
                <img src="images/Logo-Png-768x327.png" alt="logo" width="30%" >
            </div>
            
            <div class="formheader">
                <h1>شكرا ملاحظاتك قيمة، وسوف توفر لك خدمة أفضل</h1>
                <h1>Thank you for your valuable feedback</h1>
            </div>
            <div class="glassa">
                <a href="feedback">Back</a>
            </div>
            
                
            <div class="circle1"></div>
        <div class="circle2"></div>

    </div>
</body>
</html>