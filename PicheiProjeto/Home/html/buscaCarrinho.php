<?php
	if(isset($_GET["busca"])){
		$busca = $_GET["busca"];
		$con = new mysqli("localhost","root","","pwn");
		$sql = "select * from produto where titulo like '%$busca%'";
		$res = mysqli_query($con,$sql);
		while($reg = mysqli_fetch_array($res)){
			echo "<tr><td>". $reg["codigo"] . "</td>";
			echo "<td>". $reg["titulo"] . "</td>";
			echo "<td>". $reg["valor"] . "</td>";
			echo "<td>". $reg["qtd"] . "</td></tr>";
	
		}
		$con->close();
	} else {
		echo "<tr><td colspan='4'>Não encontrado</td></tr>";	
	}
