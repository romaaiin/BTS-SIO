<?php include("entete.html"); ?>

<h1>Division Euclidienne</h1>

	La division euclidienne de 

	<?php $dividende = $_POST['a']; ?> 
	
	<?php $diviseur = $_POST['b']; ?> 
	
	<?php $reste = $dividende%$diviseur; ?>
	
	<?php $quotient = ($dividende-$reste)/$diviseur ; 
	if ($reste<0) {
		$quotient = $quotient-1;
		$reste = $reste+$diviseur; 
	} ?>
	
	<?php echo $dividende ?>
	par <?php echo $diviseur ?>
	est <?php echo $dividende ?>
	= <?php echo $diviseur ?>
	* <?php echo $quotient ?>
	+ <?php echo $reste ?>