<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div {
background-image: url('iii.jpg');
 background-repeat: no-repeat;
background-attachment: fixed;
  background-size: cover;
}
.button {
  background-color: black; 
  border: none;
  color: white;
  padding: 30px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button:hover{
  background-color: white; 
  border: #4CAF50;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: #4CAF50;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
<h1>font-size: 40px></h1>
</meta>
</style>
.
<body>
<div style='text-align:center'>
<form action="baseControl1.php" method="POST">
<h1> <font color="black"> Base control buttons:</h1>
<p> </p>
<button class="button" name="forword">forword</button>
<br /> 
<br /> 
<br />
<br /> 
<button class="button button2" name="leftt">leftt</button>
<button class="button button3" name="stop">stop</button>
<button class="button button4" name="rightt">rightt</button>
<br /> 
<br /> 
<br />
<br /> 
<button class="button button5" name="backword">backword</button>
</div>
</body>
</head>
</html>
<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'task212';
  $conn = new mysqli($host, $user , $password, $db );
if(isset($_POST['forword'])) {
$forword = $_POST['forword'];
    $sql = "select * from ccontrolbuttonss WHERE 1";
    $sql = "INSERT INTO  ccontrolbuttonss (forword) VALUES ('forword')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item Added ";
    }
    else{
        echo "error ";
    }
}
else if(isset($_POST['leftt'])) {
$leftt = $_POST['leftt'];
    $sql = "select * from ccontrolbuttonss WHERE 1";
    $sql = "INSERT INTO  ccontrolbuttonss (leftt) VALUES ('leftt')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item Added ";
    }
    else{
        echo "error";
    }
}
else if(isset($_POST['stop'])) {
$stop = $_POST['stop'];
    $sql = "select * from ccontrolbuttonss WHERE 1";
    $sql = "INSERT INTO  ccontrolbuttonss (stop) VALUES ('stop')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item Added ";
    }
    else{
        echo "error ";
    }
}

else if(isset($_POST['rightt'])) {
$rightt = $_POST['rightt'];
    $sql = "select * from ccontrolbuttonss WHERE 1";
    $sql = "INSERT INTO  ccontrolbuttonss (rightt) VALUES ('rightt')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item Added ";
    }
    else{
        echo "error";
    }
}
else if(isset($_POST['backword'])) {
$backword = $_POST['backword'];
    $sql = "select * from ccontrolbuttonss WHERE 1";
    $sql = "INSERT INTO  ccontrolbuttonss (backword) VALUES ('backword')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item Added ";
    }
    else{
        echo "error ";
    }
}

?>
