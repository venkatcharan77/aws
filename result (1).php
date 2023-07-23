<html>
<head> <!--<link rel="stylesheet" type="text/css" href="style.css">-->
<title>Online Student Result Management</title>
</head>
<body bgcolor="yellow">
<center><br>
<div class="txt"><h1 >ANNAMACHARYA INSTITUTE OF TECHNOLOGY AND SCIENCES</h6></div>
<div class="content">
<div class="content3"><br><hr>
<div class="max"><b><h2 style="background-color:gray; color:PINK;">B.TECH(REGULAR) II-II RESULT</b></h2></div><hr>
<div class="padding" style="padding:10px; line-height:37px;"><div align="left">
<?php
$rollno=$_POST["rollno"];
$aadharno=$_POST["aadharno"];
$conn=mysqli_connect("localhost","root","", "results");
$sql="SELECT name,rollno,aadharno,dbms,python,dms,coi,css,sum(dbms+python+dms+coi+css)as total FROM studentresults WHERE rollno='$rollno' AND aadharno='$aadharno'";
$runQuery=mysqli_query($conn, $sql);
$countRows = mysqli_num_rows($runQuery);
if($countRows>0){
while($row=mysqli_fetch_array($runQuery)){
	echo "<b>"."NAME:"."</b>".$row['name']."<br>";
	echo "<b>"."ROLLNO:"."</b>".$row['rollno']."<br>";
	echo "<b>"."AADHARNO:"."</b>".$row['aadharno']."<br>";
	echo "<hr>";
	echo "<center>";
	echo "<b><font color=blue>&ensp;&ensp;&ensp;SUBJECT NAME &ensp;</b></font><b><font color=blue>&ensp;&ensp;&ensp;&ensp;MARKS</font></b>"."<br>";
	echo "<hr>";
	echo "<b>"."database management system:"."</b>".$row['dbms']."<br>";
	echo "<b>"."python:"."</b>".$row['python']."<br>";
	echo "<b>"."discrete mathematica structures:"."</b>".$row['dms']."<br>";
	echo "<b>"."constitution of india:"."</b>".$row['coi']."<br>";
	echo "<b>"."cascading style sheets:"."</b>".$row['css']."<br>";
	echo"<b>"."total:"."</b>".$row['total']."<br>";

	}
}
else{
	echo "<center><h2>Enter valid Rollno and Section</h2></center>";
	}
?>
</div>
</body>
</html>