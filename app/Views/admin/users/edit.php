
<form method="post">
 	<?= $form->input('nom','Nom et Prenom '); ?>
	<?= $form->input('pseudo','Pseudo'); ?>
	<?= $form->input('motdepass','mot de passe',['type'=>'password']); ?>
	<div class="form-group">
    	<label for="nationalite">Nationalite </label>
			<select name="nationalite" id="nationalite" class="form-control"> 
				<option value="Afghan">	Afghan </option> 
				<option value="Albanais">	Albanais </option> 
				<option value="Algérien">	Algérien	</option> 
				<option value="Allemand">	Allemand	</option> 
				<option value="Américain">	Américain	</option>
				<option value="Angolais"> Angolais	</option>
				<option value="Argentin">	Argentin	</option>
				<option value="Arménien">	Arménien </option> 
				<option value="Australien">	Australien	</option> 
				<option value="Autrichien">	Autrichien </option> 
				<option value="Bangladais">	Bangladais	</option> 
				<option value="Belge">	Belge	</option> 
				<option value="Béninois">	Béninois	</option> 
				<option value="Bosniaque">	Bosniaque	</option> 
				<option value="Botswanais"> Botswanais	</option> 
				<option value="Bhoutan">	Bhoutan	</option> 
				<option value="Brésilien">	Brésilien </option> 
				<option value="Britannique">	Britannique	</option> 
				<option value="Bulgare">	Bulgare </option> 
				<option value="Burkinabè">	Burkinabè	</option> 
				<option value="Cambodgien">	Cambodgien </option> 	
				<option value="Camerounais">	Camerounais	</option> 
				<option value="Canadien">	Canadien </option> 
				<option value="Chilien">	Chilien	</option> 
				<option value="Chinois">	Chinois	</option> 
				<option value="Colombien">	Colombien	</option> 
				<option value="Congolais">	Congolais	</option> 
				<option value="Cubain"> Cubain	</option> 
				<option value="Danois">	Danois	</option> 
				<option value="Ecossais">	Ecossais </option> 
				<option value="Egyptien">	Egyptien	</option> 
				<option value="Espagnol">	Espagnol	</option> 
				<option value="Estonien">	Estonien	</option> 
				<option value="Européen">	Européen	</option> 
				<option value="Finlandais"> Finlandais	</option> 
				<option value="Français">	Français	</option> 
				<option value="Gabonais">	Gabonais </option> 
				<option value="Georgien">	Georgien	</option> 
				<option value="Grec">	Grec	</option> 
				<option value="Guinéen">	Guinéen	</option> 
				<option value="Haïtien">	Haïtien	</option> 
				<option value="Hollandais"> Hollandais	</option> 
				<option value="Hong-Kong">	Hong-Kong	</option> 
				<option value="Hongrois"> Hongrois	</option> 
				<option value="Indien">	Indien	</option> 
				<option value="Indonésien">	Indonésien </option> 
				<option value="Irakien">	Irakien	</option> 
				<option value="Iranien">	Iranien	</option> 
				<option value="Irlandais">	Irlandais	</option> 
				<option value="Islandais">	Islandais	</option> 
				<option value="Israélien"> Israélien	</option> 
				<option value="Italien">	Italien	</option> 
				<option value="Ivoirien">	Ivoirien </option> 
				<option value="Jamaïcain">	Jamaïcain	</option> 
				<option value="Japonais">	Japonais	</option> 
				<option value="Kazakh">	Kazakh	</option> 
				<option value="Kirghiz">	Kirghiz	</option> 
				<option value="Kurde"> Kurde	</option> 
				<option value="Letton">	Letton	</option> 
				<option value="Libanais">	Libanais </option> 
				<option value="Liechtenstein">	Liechtenstein	</option> 
				<option value="Lituanien">	Lituanien </option> 
				<option value="Luxembourgeois">	Luxembourgeois	</option> 
				<option value="Macédonien">	Macédonien </option> 
				<option value="Madagascar">	Madagascar	</option> 
				<option value="Malaisien">	Malaisien </option> 
				<option value="Malien">	Malien	</option> 
				<option value="Maltais">	Maltais	</option> 
				<option value="Marocain">	Marocain	</option> 
				<option value="Mauritanien">	Mauritanien	</option> 
				<option value="Mauricien">	Mauricien	</option> 
				<option value="Mexicain">	Mexicain	</option> 
				<option value="Monégasque"> Monégasque	</option> 
				<option value="Mongol">	Mongol	</option> 
				<option value="Néo-Zélandais">	Néo-Zélandais	</option> 
				<option value="Nigérien">	Nigérien	</option> 
				<option value="Nord Coréen">	Nord Coréen	</option> 
				<option value="Norvégien">	Norvégien	</option> 
				<option value="Pakistanais">	Pakistanais </option> 
				<option value="Palestinien">	Palestinien	</option> 
				<option value="Péruvien">	Péruvien </option> 
				<option value="Philippins">	Philippins	</option> 
				<option value="Polonais">	Polonais </option> 
				<option value="Portoricain">	Portoricain	</option> 
				<option value="Portugais">	Portugais </option> 
				<option value="Roumain">	Roumain	</option> 
				<option value="Russe">	Russe	</option> 
				<option value="Sénégalais">	Sénégalais	</option> 
				<option value="Serbe">	Serbe	</option> 
				<option value="Serbo-croate"> Serbo-croate	</option> 
				<option value="Singapour">	Singapour	</option> 
				<option value="Slovaque"> Slovaque	</option> 
				<option value="Soviétique">	Soviétique	</option> 
				<option value="Sri-lankais">	Sri-lankais	</option> 
				<option value="Sud-Africain">	Sud-Africain	</option>
				<option value="Sud-Coréen">	Sud-Coréen	</option> 
				<option value="Suédois">	Suédois	</option> 
				<option value="Suisse">	Suisse </option> 
				<option value="Syrien">	Syrien	</option> 
				<option value="Tadjik">	Tadjik	</option> 
				<option value="Taïwanais">	Taïwanais	</option> 
				<option value="Tchadien">	Tchadien	</option> 
				<option value="Tchèque"> Tchèque	</option> 
				<option value="Thaïlandais">	Thaïlandais	</option>
				<option value="Tunisien">	Tunisien </option> 
				<option value="Turc">	Turc	</option> 
				<option value="Ukrainien">	Ukrainien	</option> 
				<option value="Uruguayen">	Uruguayen	</option> 
				<option value="Vénézuélien">	Vénézuélien	</option> 
				<option value="Vietnamien">	Vietnamien	</option> 
			</select>
        </div>
 		<button class="btn btn-primary">Sauvegarder</button>
</form>