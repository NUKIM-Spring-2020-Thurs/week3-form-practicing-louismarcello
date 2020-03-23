<meta http-equiv="Content-type" content="text/html" charset="UTF-8"/>

<body style="background-color:#ccffff; ">
<?php

$name=$_POST["username"];
$gender=$_POST["gender"];
$bday=$_POST["birthday"];
$blood=$_POST["blood"];
$id=$_POST["Card"];
$phone=$_POST["Phone"];
$email=$_POST["Email"];
$lineid=$_POST["line"];
$live=$_POST["city"];
$shirt=$_POST["size"];
$diet=$_POST["diet"];
$activity=$_POST["act"];
$comment=$_POST["comment"];

echo "Name :".$name."<br/><br/>";
echo "Gender :".$gender."<br/><br/>";
echo "Date of Birth :".$bday."<br/><br/>";
echo "Blood Type :".$blood."<br/><br/>";
echo "ID card number :".$id."<br/><br/>";
echo "Phone Number :".$phone."<br/><br/>";
echo "Email Address :".$email."<br/><br/>";
echo "Line ID :".$lineid."<br/><br/>";

if(isset($_POST["city"])){
	$live=$_POST["city"];
	$livenumber=count($live);
	for($i=0;$i<$livenumber;$i++){
		echo "Live in :".$live[$i]."<br/><br/>";
	}
}else{

}

echo "Shirt Size :".$shirt."<br/><br/>";
echo "Diet Preference :".$diet."<br/><br/>";


//$activityNO=count($activity);
//for($j=0;$j<$activityNO;$j++)
//{
//	echo "Activities :".$activity[$j]."<br/>";
//}
echo "Activities :".implode(",",$activity)."<br/><br/>";

//foreach ($activity as $key => $value) {
//	echo "Activities :".$value."<br/>";
//}


//echo nl2br($comment);
echo "Suggestions and Opinions :<br/>";
echo nl2br(htmlspecialchars($comment))."<br/><br/>";

echo "<h2><font color=red>Thanks for filling the form!</font></h2>";
?>
</body>