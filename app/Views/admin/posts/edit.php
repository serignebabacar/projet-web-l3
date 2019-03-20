<form method="post">
 	<?= $form->input('nom','Nom du monument'); ?>
 	<?= $form->input('type','le Type ');?>
	<?= $form->input('description','la description ');?>
	<?= $form->input('latitude','cordonnées : latitude ');?>
	<?= $form->input('longitude','cordonnées : longitude ');?>
 	<?= $form->select('numQuestio','Nom Questionnaire',$categories);?>
 	<button class="btn btn-primary">Sauvegarder</button>
 </form>