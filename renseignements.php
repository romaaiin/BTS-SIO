<?php include("entete.html"); ?>

<h3>Demande de renseignements</h3>
	
<br> <br>
	<table>
	<label for="nomprenom">Nom--Prénom </label> <input type="text" name="nomprenom" size="100px"> <br> <br>
	<label for="email">Email pour la réponse </label> <input type="text" name="Email" size="100px"> <br> <br>
	<label for="demande">Demande concernant  </label> <select name="demande">
		<option value="1">La formation</option>
		<option value="2">L'entreprise</option>
		<option value="3">Le stagiaire</option> 
	</select> <br> <br>
	<label for="urgence" class="radio">Urgence de la réponse 	</label>
		<input  type="radio" name="urgence" value="élevée"> élevée <br>
		<input  type="radio" checked name="urgence" value="moyenne"  /> moyenne <br>
		<input  type="radio" name="urgence" value="faible"> faible <br> <br>
	<label for="commentaire">Sujet de la demande </label> <textarea name="commentaire" rows="5" cols="100px" > </textarea> <br> <br>
	<button name="Valider" type="Submit"> Envoyer </button>
	</table>
	
		</body>
	</html>