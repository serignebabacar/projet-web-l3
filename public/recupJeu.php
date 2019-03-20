<?php
 require("3_classe.php");
$messages=array();
    $db=new PDO('mysql:host=localhost;dbname=projetWeb','root','');
    $requete=$db->query("SELECT jeu.id,jeu.nom,jeu.type,jeu.description,jeu.longitude,jeu.latitude,questionnaire.nomQuestionnaire 
		FROM jeu
		LEFT JOIN questionnaire ON jeu.numQuestio=questionnaire.id
		
			ORDER BY jeu.id DESC ");
   // while($all=$requete->fetch()){
     //   $messages[]=$all;
    //}
    //$tab=array();
    //foreach($messages as $message){
        
      //      $tab[]=new Etudiant($message['nom'], $message['latitude'],$message['longitude']);
    //}
   
    //for($i=0;$i<count($tab);$i++){
      //  echo $tab[$i]->toJSON();
    //}

   
    while($all=$requete->fetch()){
        $messages[]=array('nom'=>$all['nom'],
          'id'=>$all['id'],
          'latitude'=>$all['latitude'],
          'longitude'=>$all['longitude'],
          'description'=>$all['description'],
          'nomQuestionnaire'=>$all['nomQuestionnaire']);
    }
     echo json_encode($messages);
?>
