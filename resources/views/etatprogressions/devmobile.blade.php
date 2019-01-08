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
							<input disabled type="text" class="form-control" id="inputWarning2" name="formation" value="{{$formation}}">
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
							    <option value="Semaine 11">Semaine 11</option>
                  <option value="Semaine 12">Semaine 12</option>
							</select>
							<div class="dropDownSelect2"></div>
						</div>
					</div>


					<div class="w-full dis-none js-show-service1 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="ection 1: Présentation de Flutter et Dart !">
								<label class="label-checkbox100" for="checkbox1">
									Section 1: Présentation de Flutter et Dart !
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 2: Installation de Flutter?">
								<label class="custom-control-label" for="checkbox2">
									Section 2: Installation de Flutter
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service2 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 3: Notre première application">
								<label class="label-checkbox100" for="checkbox1">
									Section 3: Notre première application
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 4: Les bases de Dart (partie1)">
								<label class="custom-control-label" for="checkbox2">
									Section 4: Les bases de Dart (partie1)
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service3 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 5:Les bases de Dart (partie 2)">
								<label class="label-checkbox100" for="checkbox1">
									Section 5:Les bases de Dart (partie 2)
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 6: La programmation orienté objet avec Dart">
								<label class="custom-control-label" for="checkbox2">
									Section 6: La programmation orienté objet avec Dart
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service4 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 7: Les Widgets basiques">
								<label class="label-checkbox100" for="checkbox1">
									Section 7: Les Widgets basiques
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 8: Les Widgets basiques partie 2">
								<label class="custom-control-label" for="checkbox2">
									Section 8: Les Widgets basiques partie 2
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service5 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 9: Créez une application de musique">
								<label class="label-checkbox100" for="checkbox1">
									 Section 9: Créez une application de musique
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 10: Pop up et Navigator">
								<label class="custom-control-label" for="checkbox2">
									Section 10: Pop up et Navigator
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service6 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 11:Créez une application de Quizz">
								<label class="label-checkbox100" for="checkbox1">
									 Section 11:Créez une application de Quizz
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 12:Les Widgets interactifs">
								<label class="custom-control-label" for="checkbox2">
									Section 12:Les Widgets interactifs
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service7 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 13:Créez une application de calcul de calories">
								<label class="label-checkbox100" for="checkbox1">
									 Section 13:Créez une application de calcul de calories

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="PHP: Introduction">
								<label class="custom-control-label" for="checkbox2">
									Section 14:Les Widgets Cupertino (style iOS)
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service8 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 15:Les scrollables - Listes et Grilles">
								<label class="label-checkbox100" for="checkbox1">
									 Section 15:Les scrollables - Listes et Grilles

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 16:Créez une application de flux RSS">
								<label class="custom-control-label" for="checkbox2">
									Section 16:Créez une application de flux RSS
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service9 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 17:CodaMeteo - Le Drawer">
								<label class="label-checkbox100" for="checkbox1">
									 Section 17:CodaMeteo - Le Drawer

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Wordpress">
								<label class="custom-control-label" for="checkbox2">
									Section 18:CodaMeteo - Le SharedPreferences
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service10 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 19: CodaMeteo - Json & API">
								<label class="label-checkbox100" for="checkbox1">
									 Section 19: CodaMeteo - Json & API

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 20: Enregistrer les données de façon permanente (Partie 1)">
								<label class="custom-control-label" for="checkbox2">
									Section 20: Enregistrer les données de façon permanente (Partie 1)
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service11 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Section 21: SQFlite - Enregistrer les données de façon permanente (Partie 2)">
								<label class="label-checkbox100" for="checkbox1">
									 Section 21: SQFlite - Enregistrer les données de façon permanente (Partie 2)

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Section 22:ImagePicker - Utilisez l’appareil photo et la librairie">
								<label class="custom-control-label" for="checkbox2">
									Section 22:ImagePicker - Utilisez l’appareil photo et la librairie
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service12 test">
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
						<span class="label-input100">Etudiants*</span>
						<div>
							<select class="js-select3" name="user_id">
								<option selected>Selectionner un etudiant</option>
								@foreach(Auth::user()->students as $student)
							    <option value="{{ $student->id }}">{{ $student->name }}</option>
								@endforeach
							</select>
							<div class="dropDownSelect3"></div>
						</div>
					</div>

					<h3>Statut</h3>

					<div class="wrap-contact100-form-radio">
						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio4" type="radio" name="statut" value="A revoir" checked="checked">
							<label class="label-radio100" for="radio4">
								A revoir
							</label>
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

						else if($(this).val() == "Semaine 11") {
							$('.test').slideUp();
							$('.js-show-service11').slideUp();
							$('.js-show-service11').slideDown();
						}

            else if($(this).val() == "Semaine 12") {
							$('.test').slideUp();
							$('.js-show-service12').slideUp();
							$('.js-show-service12').slideDown();
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
