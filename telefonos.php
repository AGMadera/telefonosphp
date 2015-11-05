<?php

	$fileU=file_get_contents("usuario.txt");
	$lineasU=explode("\n", $fileU);

	$fileT=file_get_contents("telefono.txt");
	$lineasT=explode("\n", $fileT);

	for($i=0;$i<count($lineasU);$i++)
	{
		$divideU = explode("," , $lineasU[$i]);
		//==============================================
		for($j=0;$j<count($lineasT);$j++)
		{
			$divideT=explode(",", $lineasT[$j]);

			if($divideU[0]==$divideT[1])
			{
				echo $divideU[1]." - ".$divideT[2];
				echo "<br>";
			}
		}
		//=============================================

	}

?>
