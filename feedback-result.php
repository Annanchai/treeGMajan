<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#5bbd53">
    <title>Results</title>
    <link rel="stylesheet" href="./result.css">
    <link rel="icon" href="images/icon.png">
    <script src="https://kit.fontawesome.com/309e597dc5.js" crossorigin="anonymous"></script>
    <style>
      * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
  background: -webkit-gradient(linear, left bottom, right top, from(grey), to(#c1c1c1));
  background: linear-gradient(to top right, grey, #c1c1c1);
  min-height: 100vh;
  background-repeat: no-repeat;
}

.result {
  width: 90vw;
  background: white;
  padding: 20px;
  text-align: center;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;
  border-radius: 10px;
}

.heading {
  text-align: center;
  padding: 20px;
}

label{
    font-weight: bold;
}

.input {
  background: #afaeae;
  padding-top: 10px;
  padding-bottom: 20px;
  border-radius: 10px;
}

.button {
  padding: 5px 20px;
  border: none;
  background: #5bbd53;
  color: white;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
  margin-left: 20px;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border: 2px solid black;
  margin-top: 10px;
  overflow-x: auto;
  width: 90%;
}

th {
  padding: 12px 15px;
  text-align: center;
  background-color: #5bbd53;
}

td th {
  border: 1px solid #ddd;
  padding: 8px;
}

td {
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:nth-child(odd) {
  background-color: #c1c1c1;
}

tr:hover {
  background-color: #5bbd53;
  color: white;
}

@media only screen and (max-width: 600px) {

.button{
    margin-top: 5px;
}

h1{
    font-size: 30px;
}
    
}

    </style>

</head>
<body>
  <div class="result">
    <div class="heading">
      <img src="./images/logo.png" alt="">
      <h1>Feedback Results</h1><br>
    </div>

    <div class="input">
      <form method="POST">
        <label for="date">Filter feedbacks by date: </label><input type="date" name="date" value="<?php echo date('y-m-d') ?>">
        <input type="submit" value="Filter" class="button" name="filter" formaction="feedback-resultbydate.php">
        <input type="submit" value="Display all" class="button" name="displayAll">
      </form>
      
      <table class="center">
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Place</th>
          <th>Email</th>
          <th>Reception</th>
          <th>Optometry</th>
          <th>Doctor</th>
          <th>Nursing</th>
          <th>Opticals</th>
          <th>Cleanliness</th>
          <th>Your Suggestions</th>
        </tr>
        
        <?php
      $servername = "localhost";
      $database = "u168764240_majanfeedback";
      $username = "u168764240_treegmajan";
      $password = "Barkaoman@1";
      $date = $_POST['date'];

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Check connection
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM Feedback";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      //Output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          $name = $row["name"];
          $phone = $row["phone"];
          $place = $row["place"];
          $email = $row["email"];
          $reception = $row["reception"];
          $optometry = $row["optometry"];
          $doctor = $row["doctor"];
          $nursing = $row["nursing"];
          $opticals = $row["opticals"];
          $cleanliness = $row["cleanliness"];
          $yourSuggestions = $row["yourSuggestions"];

          echo '<tr>
                 <td>'.$name.'</td>
                 <td>'.$phone.'</td>
                 <td>'.$place.'</td>
                 <td>'.$email.'</td>
                 <td>'.$reception.'</td>
                 <td>'.$optometry.'</td>
                 <td>'.$doctor.'</td>
                 <td>'.$nursing.'</td>
                 <td>'.$opticals.'</td>
                 <td>'.$cleanliness.'</td>
                 <td>'.$yourSuggestions.'</td>
               </tr>';

      }
    '</table>';
    $result->free();

    
    $conn->close();
     }
     echo "</div>";
    ?>
  </div>
    
    
</body>
</html>