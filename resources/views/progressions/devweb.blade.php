<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Oschool Code | Pour les apprentis codeurs</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="/sessions/images/icons/image-profil.png"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/sessions/css/util.css">
		<link rel="stylesheet" type="text/css" href="/sessions/css/main.css">
	<!--===============================================================================================-->
	</head>
	<body>


		<div class="container-contact100">
			<div class="wrap-contact100">
				<img style="width: 40%;display: block;margin-left: auto;margin-right: auto;" src="/new/images/dashboard.png" alt="">
				<h2 style="margin: 25px 0px;">Marquer la progression d'un étudiant pour la formation {{$formation}}</h2>
				<form method="post" enctype="multipart/form-data" action="{{ route('progressions.store') }}" class="contact100-form validate-form">
					{{ csrf_field() }}
					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Formation concernée</span>
						<div>
							<input class="input100" type="text" class="form-control" id="inputWarning2" name="formation" value="{{$formation}}">
						</div>
					</div> 


					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Les parties terminées *</span>
						<div>
							<select class="js-select2" name="section">
								<option selected>Selectionner une partie</option>
							    <option value="Semaine 1">Semaine 1</option>
							    <option value="Semaine 2">Semaine 2</option>
							    <option value="Semaine 3">Semaine 3</option>
							    <option value="Semaine 4">Semaine 4</option>
							    <option value="Semaine 5">Semaine 5</option>
							    <option value="Semaine 6">Semaine 6</option>
							    <option value="Semaine 7">Semaine 7</option>
							    <option value="Semaine 8">Semaine 8</option>
							    <option value="Semaine 9">Semaine 9</option>
							    <option value="Semaine 10">Semaine 10</option>
							    <option value="Semaine 11 et 12">Semaine 11 et 12</option>
							</select>
							<div class="dropDownSelect2"></div>
						</div>
					</div>


					<div class="w-full dis-none js-show-service1 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Bienvenue">
								<label class="label-checkbox100" for="checkbox1">
									Bienvenue
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Comment fonctionne le web?">
								<label class="custom-control-label" for="checkbox2">
									Comment fonctionne le web?
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service2 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="HTML: Structure d'un site web">
								<label class="label-checkbox100" for="checkbox1">
									HTML: Structure d'un site web
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Un regard plus attentif sur CSS">
								<label class="custom-control-label" for="checkbox2">
									Un regard plus attentif sur CSS
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service3 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Bordures et espaces">
								<label class="label-checkbox100" for="checkbox1">
									Bordures et espaces
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Construire avec Bootstrap">
								<label class="custom-control-label" for="checkbox2">
									Construire avec Bootstrap
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service4 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Créez un site web interactif: Faire un menu déroulant">
								<label class="label-checkbox100" for="checkbox1">
									Créez un site web interactif: Faire un menu déroulant
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Site web interactif: Menu coulissant">
								<label class="custom-control-label" for="checkbox2">
									Site web interactif: Menu coulissant
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service5 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Javascript: les bases">
								<label class="label-checkbox100" for="checkbox1">
									 Javascript: les bases
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Les évènements">
								<label class="custom-control-label" for="checkbox2">
									Les évènements
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service6 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Site web interactif : Construisez un fil d'actualités">
								<label class="label-checkbox100" for="checkbox1">
									 Site web interactif : Construisez un fil d'actualités
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Le DOM">
								<label class="custom-control-label" for="checkbox2">
									Le DOM
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service7 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Site web interactif: Construisons la page d'accueil de Flipboard">
								<label class="label-checkbox100" for="checkbox1">
									 Site web interactif: Construisons la page d'accueil de Flipboard

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="PHP: Introduction">
								<label class="custom-control-label" for="checkbox2">
									PHP: Introduction
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service8 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Les bases en PHP">
								<label class="label-checkbox100" for="checkbox1">
									 Les bases en PHP

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Transmettre les données de page en page">
								<label class="custom-control-label" for="checkbox2">
									Transmettre les données de page en page
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service9 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="PHP/MySQL">
								<label class="label-checkbox100" for="checkbox1">
									 PHP/MySQL

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Wordpress">
								<label class="custom-control-label" for="checkbox2">
									Wordpress
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service10 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Hébergement et noms de domaines">
								<label class="label-checkbox100" for="checkbox1">
									 Hébergement et noms de domaines

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Qu'avons-nous appris de ce cours ?">
								<label class="custom-control-label" for="checkbox2">
									Qu'avons-nous appris de ce cours ?
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service11-12 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Projets">
								<label class="label-checkbox100" for="checkbox1">
									 Projets

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Soutenances">
								<label class="custom-control-label" for="checkbox2">
									Soutenances
								</label>
							</div>

						</div>
					</div>

					<!--DEBUT SECTION DES ETUDIANTS A COCHER ET DES STATUTS-->

					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Etudiant</span>
						<div>
							<select class="js-select3" name="user_id">
								<option selected>Selectionner un etudiant</option>
								@foreach($students as $student)
							    <option value="{{ $student->id }}">{{ $student->name }}</option>
								@endforeach
							</select>
							<div class="dropDownSelect3"></div>
						</div>
					</div>

					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Statut</span>
						<div>
							<select class="js-select3" name="statut">
							   <option value="Validé">Validé</option>
								 <option value="A revoir">A revoir</option>
							</select>
							<div class="dropDownSelect3"></div>
						</div>
					</div>

					<!--FIN SECTION DES ETUDIANTS A COCHER ET DES STATUTS-->

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							<span>
								Envoyer
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>

						<p style="margin-top: 10px;"> <a href="{{url('home')}}">Retour au tableau de bord</a> </p>
					</div>
				</form>
			</div>
		</div>



	<!--===============================================================================================-->
		<script src="/sessions/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="/sessions/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="/sessions/vendor/bootstrap/js/popper.js"></script>
		<script src="/sessions/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="/sessions/vendor/select2/select2.min.js"></script>
		<script>
			$(".js-select2").each(function(){
				$(this).select2({
					minimumResultsForSearch: 20,
					dropdownParent: $(this).next('.dropDownSelect2')
				});


				$(".js-select2").each(function(){
					$(this).on('select2:close', function (e){
						if($(this).val() == "Selectionner une partie") {
							$('.test').slideUp();
						}

	                    else if($(this).val() == "Semaine 1") {
	                    	$('.test').slideUp();
							$('.js-show-service1').slideUp();
							$('.js-show-service1').slideDown();
						}

						else if($(this).val() == "Semaine 2") {
							$('.test').slideUp();
							$('.js-show-service2').slideUp();
							$('.js-show-service2').slideDown();
						}

						else if($(this).val() == "Semaine 3") {
							$('.test').slideUp();
							$('.js-show-service3').slideUp();
							$('.js-show-service3').slideDown();
						}

						else if($(this).val() == "Semaine 4") {
							$('.test').slideUp();
							$('.js-show-service4').slideUp();
							$('.js-show-service4').slideDown();
						}

						else if($(this).val() == "Semaine 5") {
							$('.test').slideUp();
							$('.js-show-service5').slideUp();
							$('.js-show-service5').slideDown();
						}

						else if($(this).val() == "Semaine 6") {
							$('.test').slideUp();
							$('.js-show-service6').slideUp();
							$('.js-show-service6').slideDown();
						}

						else if($(this).val() == "Semaine 7") {
							$('.test').slideUp();
							$('.js-show-service7').slideUp();
							$('.js-show-service7').slideDown();
						}

						else if($(this).val() == "Semaine 8") {
							$('.test').slideUp();
							$('.js-show-service8').slideUp();
							$('.js-show-service8').slideDown();
						}

						else if($(this).val() == "Semaine 9") {
							$('.test').slideUp();
							$('.js-show-service9').slideUp();
							$('.js-show-service9').slideDown();
						}

						else if($(this).val() == "Semaine 10") {
							$('.test').slideUp();
							$('.js-show-service10').slideUp();
							$('.js-show-service10').slideDown();
						}

						else if($(this).val() == "Semaine 11 et 12") {
							$('.test').slideUp();
							$('.js-show-service11-12').slideUp();
							$('.js-show-service11-12').slideDown();
						}

						else {
							$('.test').slideUp();
							$('.test').slideDown();
						}
					});
				});
			})
		</script>

		<!--script de la section etudian-->
		<script>
		$(".js-select3").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect3')
			});
		})
		</script>

	<!--===============================================================================================-->
		<script src="/sessions/vendor/daterangepicker/moment.min.js"></script>
		<script src="/sessions/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="/sessions/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="/sessions/vendor/noui/nouislider.min.js"></script>

	</body>
</html>
