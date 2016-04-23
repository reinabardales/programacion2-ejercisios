<html>
	<head>
		<title>hola mundo</title>
	</head>
	<body>
		<form action="ejercisio1.php" method="post">
			<input type="text" name="numero"><br>
			<input type="submit" value="invertir">

		</form>
		<?php 

		$num=$_POST['numero'];
		$nstring=(string)$num;
		$result="";

		for($i=strlen($num);$i>=0;$i--)
{
    # añadimos cada uno de los valores a la variable $result
    $result.=$nstring[$i];
}
 
# Mostramos el numero invertido
echo "El valor invertido es: ".(int)$result." <br>";




		 ?>
	</body>
</html>
