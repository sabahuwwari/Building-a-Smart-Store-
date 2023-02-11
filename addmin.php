<style>

table{
  border: 2px pink;
  color: black;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
font-family : Times New Roman;
font-weight: bold;
float:center;
}

th{
padding: 50px 50px;
            margin: 50px 50px;
}
td{
padding: 50px 50px;
            margin: 50px 50px;
}




</style>



<?php
$servername = "localhost";
$username = "root";
$password = "Your_Password";
$dbname = "Your_Database";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$count = 0;
$qry = "SELECT SensorID,Value FROM sensors";
$result = $conn->query($qry);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // echo "<br>";
    $output .= "<br>";
    $S = $row["SensorID"];
    $V = $row["Value"];

    if ($S == 1 && $V == "Motion Detected") { // PIR
      $count++;
      $output .= "Number Of People Entrence:" . $count;
    }

    if ($S == 2 && $V != "0") { // Humidity
      $humidity = (int) $V;
      
    }

    if ($S == 3 && $V != "0") { // Gas
      $gas = (int) $V;
      
    }
  } //while
} //if

$qry = "SELECT SectionID,MinPeople,MaxHum , MaxGa FROM sections";
$result = $conn->query($qry);
if ($result->num_rows > 0) {
  $output .= "<table border>";
  while ($row = $result->fetch_assoc()) {
    $output .= "<br>";
    $I = $row["SectionID"];
    $M = $row["MinPeople"];
    $h = $row["MaxHum"];
    $g = $row["MaxGa"];

    $output .= "<tr>";
    $output .= "<tr><td>ID<td>" . $I;
    $output .= "<tr><td>Min People<td>" . $M;


    if ($I == 1) {
      if ($M <= $count) {
        $res = "Repeated visits to grocery section keep providing products!";
      } else{
      $res = "Very poor visits to grocery section,why not to do a discount?";
	  }
	  
	  
      if ($humidity <= $h) {
		 
        $hu = "Humidity in grocery section is ok";
      } else{
      $hu = "Humidity in grocery section is very high!You may need to call maintinance team";
	  }
	  
      if ($gas <= $g) {
        $ga = "Gas in grocery section is ok";
      } else{
      $ga = "Gas in grocery section is very high!You may need to call maintinance team";
    }
	
	}


    if ($I == 2) {
      if ($M <= $count) {
        $res = "Repeated visits to electronics section keep providing products!";
      }else{
      $res = "Very poor visits to electronics section,why not to do a discount?";
	  }
	  
      if ($humidity <= $h) {
        $hu = "Humidity in electronics section is ok";
      }else{
      $hu = "Humidity in electronics section is very high!You may need to call maintinance team";
	  }
	  
      if ($gas <= $g) {
        $ga = "Gas in electronics section is ok";
      }else{
      $ga = "Gas in electronics section is very high!You may need to call maintinance team";
    }
	}

    if ($I == 3) {
      if ($M <= $count) {
        $res = "Repeated visits to clothes section keep providing products!";
      }else{
      $res = "Very poor visits to clothes section,why not to do a discount?";
	  }
	  
      if ($humidity <= $h) {
        $hu = "Humidity in clothes section is ok";
      }else{
      $hu = "Humidity in clothes section is very high!You may need to call maintinance team";
	  }
	  
      if ($gas <= $g) {
        $ga = "Gas in clothes section is ok";
      }else{
      $ga = "Gas in clothes section is very high!You may need to call maintinance team";
    }
	}



    if ($I == 4) {
      if ($M <= $count) {
        $res = "Repeated visits to home section keep providing products!";
      }else{
      $res = "Very poor visits to home section,why not to do a discount?";
	  }
      if ($humidity <= $h) {
        $hu = "Humidity in home section is ok";
      } else{
      $hu = "Humidity in home section is very high!You may need to call maintinance team";
	  }
      if ($gas <= $g) {
        $ga = "Gas in home section is ok";
      }else{
	 
      $ga = "Gas in home section is very high!You may need to call maintinance team";
    }
	}

    $output .= "<tr><td>PIR Says <td>" . $res;
    $output .= "<tr><td>Humidity Says <td>" . $hu;
    $output .= "<tr><td>Gas Says <td>" . $ga;

  } //while
  $output .= "</table>";
  echo $output;
} //if
else
  echo "0 results";


$conn->close();
?>

