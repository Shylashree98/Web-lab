<?php

if(isset($_POST['res'])){

	$res=$_POST['dis'];

	$res=eval('return '.$res.';');

}

?>









<html>

	<head>

		<title>Calculator</title>

		<style>

		input {

    background-color:   #3399ff;

    width: 100%;

    border: none;

    font-size: 20px;

    font-style: white;

    text-decoration-color: #33ccff;

}

			

			

			}

		

		</style>

		

	</head>

<body>

<center>

<form name="cal" method="post">

<table>

<tr><td colspan="4">

<input type="text" name="dis" value="<?php if(isset($res)){echo $res;}?>">

</td>

</tr>

<tr><td><input type="button" value="1" onclick="cal.dis.value+='1'"> </td>

		<td><input type="button" value="2" onclick="cal.dis.value+='2'"></td>

		<td><input type="button" value="3" onclick="cal.dis.value+='3'"></td>

		<td><input type="button" value="+" onclick="cal.dis.value+='+'"></td>

</tr>

<tr><td><input type="button" value="4" onclick="cal.dis.value+='4'"></td>

		<td><input type="button" value="5" onclick="cal.dis.value+='5'"></td>

		<td><input type="button" value="6" onclick="cal.dis.value+='6'"></td>

		<td><input type="button" value="-" onclick="cal.dis.value+='-'"></td>

</tr>

<tr><td><input type="button" value="7" onclick="cal.dis.value+='7'"></td>

		<td><input type="button" value="8" onclick="cal.dis.value+='8'"></td>

		<td><input type="button" value="9" onclick="cal.dis.value+='9'"></td>

		<td><input type="button" value="*" onclick="cal.dis.value+='*'"></td>

</tr>

<tr><td><input type="button" value="c" onclick="cal.dis.value=' '"></td>

		<td><input type="button" value="0" onclick="cal.dis.value+='0'"></td>

		<td><input type="submit" value="=" name="res"</td>

		<td><input type="button" value="/" onclick="cal.dis.value+='/'"></td>

</tr>

</table>

</form>

</center>

</body>

</html>