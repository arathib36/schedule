<?php

session_start();

$db=mysqli_connect("localhost","root","");

$uname=$_SESSION['uname'];
$day=$_SESSION['day'];
$month=$_SESSION['month'];
$year=$_SESSION['year'];
echo $day;
echo $month;
echo $year;
echo $uname;


if(!$db)
{echo "Not connected";
printf("Connection failed:%s\n",$db->connect_error);
exit();
}

if(!mysqli_select_db($db,"register"))
{echo "db not selected";}


$sql="SELECT * FROM events";
$resulteve=mysqli_query($db,$sql);

if(! $resulteve ) {
      echo "np ";
   }
 else
{echo "fe";}

if(mysqli_num_rows($resulteve)>=0)
{echo mysqli_num_rows($resulteve);}
/*till here it is working*/

while($row = mysql_fetch_array($resulteve, MYSQL_ASSOC)) {
      echo "Name :{$row['uname']}  <br> ".
      "Title: {$row['title']} <br> ".
      "Desc: {$row['descrip']} <br> ".
      "STime : {$row['stim']} <br> ".
      "--------------------------------<br>";
   } 


?>

<!DOCTYPEhtml>
<html>
<head>
<title>Schedule</title>
</head>
<body>
<div>
</div>
</body>
</html>
