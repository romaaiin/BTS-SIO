<?php include("entete.html"); ?>
        
        <body>
		
            <a href="index.php"><h2>Calculer un RIB</h2></a>
            
            <form id="form_rib" action="rib.php" method="POST">
                <div id="rib">
                <h4>Entrer la clé rib</h4>
                Banque : <input id="rib_nbr" type="text_rib" name="b"> <br>
                Guichet : <input id="rib_nbr" type="text_rib" name="g"> <br>
                N° de compte : <input id="rib_ncompte" type="text" name="c"> <br>
                RIB de verification : <input type="text" name="rib_v"> <br>
                </div>
                
                <input type="submit" value="Vérifier">
                
    
                
            
            </form>
        
        </body>
</html>