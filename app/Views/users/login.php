
 	<style type="text/css">
      body {padding-top: 20px;}
  </style>
  <script src="jquery.js"></script>
  <script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.min.js"></script>
  </head>
  <body>
    <div class="container">      
      <div class="modal fade" id="formulaire">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">Vos infos :</h4>
            </div>
            <div class="modal-body">
              	<form action="index.php" method="post" id="signupForm">
               		 <div class="form-group">
                  		<label for="nom">Nom et Prenom </label>
                  		<input type="text" class="form-control" name ="nom" id="nom" placeholder="Votre nom et Prenom" required >
                	</div>
					<div class="form-group">
						<label for="pseudo">Pseudo</label>
						<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Votre Pseudo" required >
					</div>
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
					<div class="form-group">
                  		<label for="password" >Mot de passe</label>
                  		<input type="password" class="form-control" name="password" id="password"  required>
                	</div>
					<div class="form-group">
                  		<label for="confirm_password">Confirmer votre mot de passe</label>
                  		<input type="password" class="form-control" name="confirm_password" id="confirm_password" required >
                	</div>
							
						<button type="submit" class="btn btn-default" id="envoie" name="envoyer">Envoyer</button>
							<script>
								$( document ).ready( function () {
									$( "#signupForm" ).validate( {
										rules: {
											nom: "required",
											nationalite: "required",
											pseudo: {
												required: true,
												minlength: 4
											},
											password: {
												required: true,
												minlength: 5
											},
											confirm_password: {
												required: true,
												minlength: 5,
												equalTo: "#password"
											},
										
										},
										messages: {
											nom: "champ obligatoire",
											nationalite: "champ obligatoire",
											pseudo: {
												required: "champ obligatoire",
												minlength: "Utilisez 4  caracteres ou plus pour votre mot de passe"
											},
											password: {
												required: "champ obligatoire",
												minlength: "Utilisez 5 caracteres ou plus pour votre mot de passe"
											},0²
											confirm_password: {
												required: "champ obligatoire",
												minlength: "Utilisez 5 caracteres ou plus pour votre mot de passe",
												equalTo: "Les mots de passe ne correspondent pas. Veuillez réessayer "
											},
										},
										errorElement: "em",
										errorPlacement: function ( error, element ) {
											// Add the `help-block` class to the error element
											error.addClass( "help-block" );

											if ( element.prop( "type" ) === "checkbox" ) {
												error.insertAfter( element.parent( "label" ) );
											} else {
												error.insertAfter( element );
											}
										},
										highlight: function ( element, errorClass, validClass ) {
											$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
										},
										unhighlight: function (element, errorClass, validClass) {
											$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
										}
									} );

									
								} );
							
								</script>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-info" data-dismiss="modal">Annuler</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  


 </div>
 
 <div class="container">
        <div class="row">
				
				
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
									
                    <div class="panel-heading">
						<div id="html">
        
     				 </div>
                        <h3 class="panel-title">Connexion</h3>
                    </div>
                    <div class="panel-body">
						<?php if($errors): ?>
							<div class="alert alert-danger">
								Identifiants incorrects
							</div>
						<?php endif?>
                        <form role="form" method="post">
                            <fieldset>
															
                                <div class="form-group">
                                    <input class="form-control" placeholder="Pseudo" name="username" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" >
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
																<button class="btn btn-primary">Sauvegarder</button>
																<a data-toggle="modal" data-backdrop="false" href="#formulaire" >S'inscrire </a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>