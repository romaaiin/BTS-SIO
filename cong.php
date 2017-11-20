<?php include("entete.html"); ?>

<h1>Congruence</h1>


		<?php $dividende1 = $_POST['a']; ?> 
	
		<?php $dividende2 = $_POST['b']; ?> 
	
		<?php $modulo = $_POST['c']; ?> 
		
	
		<?php $reste1 = $dividende1%$modulo; ?>

		<?php $reste2 = $dividende2%$modulo; ?>
		
		La congruence est : <?php if($reste1==$reste2) {echo "vrai";}
		else {echo "fausse";} ?>