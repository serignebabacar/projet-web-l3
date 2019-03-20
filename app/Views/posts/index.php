
<?php


use Core\Table\Table;

$Users=App::getInstance()->getTable("User");
 if(isset($_POST["envoyer"])){
    $result=$Users->create([
        'nom'=>$_POST['nom'],
        'pseudo'=>$_POST['pseudo'],
        'nationalite'=>$_POST['nationalite'],
        'motdepass'=>md5($_POST['password']),
    ]);
        echo '<div class="alert alert-success">
        <strong>Success!</strong> Incription reussie.
        </div>';

} ?>

               <div class="container">
                    <div class="row" >

                        <div class="col-lg-8" id="map"  style="width: 800px; height:200px">
                            </div>
							<div class="col-lg-3">
                                
                            <article name="données" >
                                <legend id="legende"></legend>
                                <h4>Cliquez sur l'emplacement de </h4>
                                <label></label> <label id = "nom"></label><br>
                                <label>Description</label> : <label id = "desc"></label><br>
                                
                               
                                <button class="btn btn-primary" id="submit" type="submit" onclick="executerRequete(lireSuivant)"><span class="glyphicon glyphicon-play"> </span>Question suivante</button>
                            </article>
                            <label>Note : </label><label id = "note">0</label><br>
							</div> <!-- ./ col-lg-3 -->
						
                </div> <!-- ./ container-fluid -->
              
                
                        <script>                         
                            
                            var map = L.map('map', {
                                    center: [51.505,-0.09],
                                    zoom: 5,
                                    maxZoom:10
                                });
                            
                            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
                          
					        map.addLayer(couche)
                           
                                
                        </script>
                   
<script type="text/javascript" src="oXHR.js"></script>
<script type="text/javascript">
    // pointeur sur la position de l'article courant dans le catalogue
    var index = 0;
    // initialisation du catalogue
    var catalogue = [];

    function executerRequete(callback) {
        // on vérifie si le catalogue a déjà été chargé pour n'exécuter la requête AJAX
        // qu'une seule fois
        if (catalogue.length === 0) {
            // on récupère un objet XMLHttpRequest
            var xhr = getXMLHttpRequest();
            // on réagit à l'événement onreadystatechange
            xhr.onreadystatechange = function() {
                // test du statut de retour de la requête AJAX
                if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                    // on désérialise le catalogue et on le sauvegarde dans une variable
                    console.log(xhr.responseText);
                    var d=xhr.responseText;
                     catalogue = JSON.parse(d);
                    // on lance la fonction de callback avec le catalogue récupéré
                    callback();
                }
            }
            // la requête AJAX : lecture de data.json
            xhr.open("POST", "recupJeu.php", true);
            xhr.send();
        } else {
            // on lance la fonction de callback avec le catalogue déjà récupéré précédemment
            callback();
        }
    }
    function note(distance){
        if(distance<=1){
            return 19;
        }else if(distance>1 && distance <=5){
            return 17;
        }
        else if(distance>5 && distance <=10){
            return 15;
        }else if(distance>10 && distance <=20){
            return 13;
        }else if(distance>20 && distance <=100){
            return 12;
        }else if(distance>100 && distance <=150){
            return 10;
        }else if(distance>150 && distance <=300){
            return 8;
        }else{
            return 5;
        }
    }
    function lireSuivant() {
        // connaitre le nombre d'articles dans le catalogue
        var longueur = catalogue.length;
        
        // manipulation du DOM pour afficher les caractéristiques de l'article
        document.getElementById("legende").innerHTML = catalogue[index].nomQuestionnaire;
        document.getElementById("nom").innerHTML = catalogue[index].nom;
        document.getElementById("desc").innerHTML = catalogue[index].description;
       
        var jeu_id=catalogue[index].id;
        
        map.on('click', function (e) { 
            var i=0;
           var noter=note(get_distance_m(parseFloat(e.latlng.lat), parseFloat(e.latlng.lng), parseFloat(catalogue[index].latitude),  parseFloat(catalogue[index].longitude))/1000);
           // alert(get_distance_m(parseFloat(e.latlng.lat), parseFloat(e.latlng.lng), parseFloat(catalogue[index].latitude),  parseFloat(catalogue[index].longitude))/1000);
           if(i==index){
            noter=0;
        }
           document.getElementById("note").innerHTML=parseFloat( document.getElementById("note").innerHTML)+noter+"/"+(index*10);
            $.post('send.php',{jeu_id:jeu_id,note:noter},function(donnees){
        });
        
        });
        i=index;
       
        if (index < longueur - 1) {
            index++;
        }
    }
    
    function deg2rad(x){
         return Math.PI*x/180;
    }
 //fonction qui calcule la distance entre 2 points A(latA,latB) et B(latB,longB)
function get_distance_m($lat1, $lng1, $lat2, $lng2) {
    $earth_radius = 6378137;   // Terre = sphère de 6378km de rayon
    $rlo1 = deg2rad($lng1);    // CONVERSION
    $rla1 = deg2rad($lat1);
    $rlo2 = deg2rad($lng2);
    $rla2 = deg2rad($lat2);
    $dlo = ($rlo2 - $rlo1) / 2;
    $dla = ($rla2 - $rla1) / 2;
    $a = (Math.sin($dla) * Math.sin($dla)) + Math.cos($rla1) * Math.cos($rla2) * (Math.sin($dlo) * Math.sin($dlo
));
  $d = 2 * Math.atan2(Math.sqrt($a), Math.sqrt(1 - $a));
  return ($earth_radius * $d);
}

    // on initialise la lecture au premier élément
    executerRequete(lireSuivant);
</script>

                
