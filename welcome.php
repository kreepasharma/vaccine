<?php
	/*foreach($_POST as $key=>$value){
		//echo"$key : $value <br>\n";
		//echo"\$$key = \$_POST[\"$key\"];<br>\n";
		//echo "echo \" $key : \$key\";<br>\n";
		echo "echo \"$key : \$$key\";<br>";
	}*/

$name = $_POST["name"];
$description = $_POST["description"];
$created_at = $_POST["created_at"];
$updated_at = $_POST["updated_at"];
echo "name : $name<br>";
echo "description : $description<br>";
echo "created_at : $created_at<br>";
echo "updated_at : $updated_at<br>";

?>