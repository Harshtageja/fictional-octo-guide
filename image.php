<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		img.c{
			width:100px;
			margin-left:100px;
			margin-top: 0px;
			display:inline-block;
			background: transparent;
		}
		a{
			background-color:white;
			border-style:none;
			visibility: hidden;
			font-size:20px;
			text-decoration: none;
			color: black;
		}
		a:hover{
			color:#81D4FA;
			cursor:pointer;
		}
		.v{
			width:40%;
			height:50px;
			text-align: center;
			font-size: 20px;
			border-radius: 5px;
			outline: none;
			border: none;
			border-bottom: 2px solid #FF8C00;
		}
		.v:hover{
			border-color: #FF8C00;
		}
				.d{
			width:40%;
			height:50px;
			text-align: center;
			font-size: 20px;
			border-radius: 5px;
			outline: none;
			border: none;
			border-bottom: 2px solid #FF8C00;
		}
		.d:hover{
			border-color: #FF8C00;
		}
		button{
			width:150px;
			height: 50px;
			border-radius: 5px;
			background-color:#FF8C00;
			border-color: #FF8C00;
			outline: none;
			color: white;
			font-weight: bolder;
			font-size: 20px;
			box-shadow: 0px 9px #888888;

		}
		button:active{
			box-shadow: 0px 5px #888888;
			transform: translateY(4px);

		}
	</style>
	<title></title>
</head>
<body><pre>
<div><img src="logo.png" class="c">                    <a href="">Search For a Driver</a >        <a href="">Search for a Sender</a>       <a href="">login</a>       <a href="">Sign Up</a></pre>
</div><div style="text-align: center;font-family:cursive;">
<h1>Your Image</h1>
<form method="post" action="http://localhost//checking.php">
<input  class="v" type="file" name="image" placeholder="Your Image ...."><br><br>
<?php
echo "<input type='text' name='Name' style='display:none' value=".$_POST['Name'].">";
echo "<input type='text' name='last' style='display:none' value=".$_POST['last'].">";
echo "<input type='text' name='Email'  style='display: none' value=".$_POST['Email'].">";
echo "<input type='text' name='dob' style='display:none' value=".$_POST['dob'].">";
echo "<input type='text' name='number' style='display:none' value=".$_POST['number'].">";
echo "<input type='text' name='gender' style='display:none' value=".$_POST['gender'].">";
echo "<input type='text' name='Password' style='display:none' value=".$_POST['Password'].">";

?>
<button type="submit">continue</button></form>
</div>
<script type="text/javascript">
	document.addEventListener('keydown',keyd);
	function keyd(e) {
		// body...
	
	if((document.querySelector('.v').value!="")){
		document.getElementsByTagName('button')[0].style.visibility="visible"
	}}

</script>
</body>
</html>