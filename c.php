<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$conn= new mysqli("localhost","root","","truck");
	if(!$conn){
		echo $conn->error;
	}
	$sql="CREATE TABLE `images` (
 `id` int(11) NOT NULL AUTO_INCREMENT,name varchar(30),
 `image` longblob NOT NULL,
 FirstName varchar(30),
 LastName varchar(30),
 Email varchar(30),
  Password varchar(30),
   Gender varchar(30),
   DOB date ,
    ContactNumber varchar(30),
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";;
	$result=$conn->query($sql);
	if(!$result){
		echo $conn->error;
	}
	else{
		echo "Success";
	}



	 ?>

</body>
</html>