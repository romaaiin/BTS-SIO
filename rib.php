<?php include("entete.html"); ?>

        <body>

<h2>Vérification de la clé RIB</h2>


La banque <?php echo $_POST['b'] ?> avec le guichet <?php echo $_POST['g'] ?> et avec le numero de compte <?php echo $_POST['c'] ?> a pour clé de rib :  <br>

            
<?php
    $b=$_POST['b'];
    $g=$_POST['g'];
    $c=$_POST['c'];
    $mod='97';
    $rib_v=$_POST['rib_v'];

    $calc_1=89*$b+(15*$g)+(3*$c); //calcul avant modulo
    $reste=$calc_1%$mod; //division avec modulo
    $key_rib=$mod-$reste; //clé rib
                
?><br>
<?php echo $key_rib ;?><br><br>
            
La clé RIB est donc 
            
<?php 
    if($key_rib==$rib_v){
        
 echo "vrai";
}
else{
    echo "fausse";
} ?> 


</body>
</html>