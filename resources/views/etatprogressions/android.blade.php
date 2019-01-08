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
							    <option value="Mois 1 et 2">Mois 1 et 2</option>
							    <option value="Mois 3 et 4">Mois 3 et 4</option>
							    <option value="Mois 5">Mois 5</option>
							    <option value="Mois 6">Mois 6</option>
							    <option value="Mois 7">Mois 7</option>
							    <option value="Mois 8">Mois 8</option>
							</select>
							<div class="dropDownSelect2"></div>
						</div>
					</div>


					<div class="w-full dis-none js-show-service1 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Partie 1: Bienvenue / Interface utilisateur">
								<label class="label-checkbox100" for="checkbox1">
									Partie 1: Bienvenue / Interface utilisateur
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service2 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Partie 2: Les entrées utilisateur">
								<label class="label-checkbox100" for="checkbox1">
									Partie 2: Les entrées utilisateur
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service3 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Partie 3: Applications multi-écrans">
								<label class="label-checkbox100" for="checkbox1">
									Partie 3: Applications multi-écrans
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service4 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Partie 4: Connecter votre application au réseau">
								<label class="label-checkbox100" for="checkbox1">
									Partie 4: Connecter votre application au réseau
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service5 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Partie 5: Stocker les informations de votre application">
								<label class="label-checkbox100" for="checkbox1">
									 Partie 5: Stocker les informations de votre application
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service6 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Partie 6: Projets/Soutenances">
								<label class="label-checkbox100" for="checkbox1">
									 Partie 6: Projets/Soutenances
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

	                    else if($(this).val() == "Mois 1 et 2") {
	                    	$('.test').slideUp();
							$('.js-show-service1').slideUp();
							$('.js-show-service1').slideDown();
						}

						else if($(this).val() == "Mois 3 et 4") {
							$('.test').slideUp();
							$('.js-show-service2').slideUp();
							$('.js-show-service2').slideDown();
						}

						else if($(this).val() == "Mois 5") {
							$('.test').slideUp();
							$('.js-show-service3').slideUp();
							$('.js-show-service3').slideDown();
						}

						else if($(this).val() == "Mois 6") {
							$('.test').slideUp();
							$('.js-show-service4').slideUp();
							$('.js-show-service4').slideDown();
						}

						else if($(this).val() == "Mois 7") {
							$('.test').slideUp();
							$('.js-show-service5').slideUp();
							$('.js-show-service5').slideDown();
						}

						else if($(this).val() == "Mois 8") {
							$('.test').slideUp();
							$('.js-show-service6').slideUp();
							$('.js-show-service6').slideDown();
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
