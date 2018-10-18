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
                  <option value="Semaine 13">Semaine 13</option>
                  <option value="Semaine 14">Semaine 14</option>
                  <option value="Semaine 15">Semaine 15</option>
                  <option value="Semaine 16">Semaine 16</option>
                  <option value="Semaine 17">Semaine 17</option>
                  <option value="Semaine 18">Semaine 18</option>
                  <option value="Semaine 19">Semaine 19</option>
							</select>
							<div class="dropDownSelect2"></div>
						</div>
					</div>


					<div class="w-full dis-none js-show-service1 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Pourquoi avez vous besoin d’une stratégie de médias sociaux?">
								<label class="label-checkbox100" for="checkbox1">
                  Pourquoi avez vous besoin d’une stratégie de médias sociaux?
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Les différents médias sociaux">
								<label class="custom-control-label" for="checkbox2">
									Les différents médias sociaux
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service2 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Jeter les bases du succès - établir des indicateurs clés de performance (KPI)">
								<label class="label-checkbox100" for="checkbox1">
									Jeter les bases du succès - établir des indicateurs clés de performance (KPI)
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Pourquoi avez vous besoin d’une stratégie de médias sociaux?">
								<label class="custom-control-label" for="checkbox2">
									Pourquoi avez vous besoin d’une stratégie de médias sociaux?
								</label>
							</div>

              <div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Structurer votre équipe de médias sociaux pour le présent et l'avenir">
								<label class="custom-control-label" for="checkbox2">
									Structurer votre équipe de médias sociaux pour le présent et l'avenir
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service3 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Evaluer les meilleurs canaux en rapport avec vos objectifs.">
								<label class="label-checkbox100" for="checkbox1">
                  Evaluer les meilleurs canaux en rapport avec vos objectifs.
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Développer un budget et obtenir l'adhésion des dirigeants">
								<label class="custom-control-label" for="checkbox2">
                  Développer un budget et obtenir l'adhésion des dirigeants
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service4 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Écoute et surveillance des médias sociaux: impératifs commerciaux">
								<label class="label-checkbox100" for="checkbox1">
                  Écoute et surveillance des médias sociaux: impératifs commerciaux
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Le pouvoir de l'écoute sociale">
								<label class="custom-control-label" for="checkbox2">
									Le pouvoir de l'écoute sociale
								</label>
							</div>

              <div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Comprendre la conversation de marque">
								<label class="custom-control-label" for="checkbox2">
                  Comprendre la conversation de marque
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service5 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Analyser la concurrence">
								<label class="label-checkbox100" for="checkbox1">
									 Analyser la concurrence
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Évaluation des outils et services d'écoute sociale et de suivi ">
								<label class="custom-control-label" for="checkbox2">
									Évaluation des outils et services d'écoute sociale et de suivi
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service6 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Le Contenu - l'épine dorsale de votre stratégie sociale media">
								<label class="label-checkbox100" for="checkbox1">
                  Le Contenu - l'épine dorsale de votre stratégie sociale media
								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Contenu des médias sociaux: les bases">
								<label class="custom-control-label" for="checkbox2">
                  Contenu des médias sociaux: les bases
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service7 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Développez votre plan de contenu stratégique">
								<label class="label-checkbox100" for="checkbox1">
                  Développez votre plan de contenu stratégique

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Comment le ton et ce que vous dites font toute la différence?">
								<label class="custom-control-label" for="checkbox2">
                  Comment le ton et ce que vous dites font toute la différence?
								</label>
							</div>

              <div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Développez votre contenu social media">
								<label class="custom-control-label" for="checkbox2">
                  Développez votre contenu social media
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service8 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Faire preuve de leadership dans l'industrie grâce à la curation de contenu">
								<label class="label-checkbox100" for="checkbox1">
									 Faire preuve de leadership dans l'industrie grâce à la curation de contenu

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="L'importance des tags, de l'originalitéet de l'analyse de votre contenu ">
								<label class="custom-control-label" for="checkbox2">
									L'importance des tags, de l'originalitéet de l'analyse de votre contenu
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service9 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Faites passer votre stratégie sociale au niveau supérieur">
								<label class="label-checkbox100" for="checkbox1">
                  Faites passer votre stratégie sociale au niveau supérieur

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Les différentes nuances du marketing d'influence">
								<label class="custom-control-label" for="checkbox2">
                  Les différentes nuances du marketing d'influence
								</label>
							</div>

              <div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Comment travailler avec des influenceurs">
								<label class="custom-control-label" for="checkbox2">
                  Comment travailler avec des influenceurs
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service10 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Qu'est-ce que l'UGC et pourquoi est-ce important ? ">
								<label class="label-checkbox100" for="checkbox1">
									 Qu'est-ce que l'UGC et pourquoi est-ce important ?

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Encouragez le contenu généré par l'utilisateur parmi votre public">
								<label class="custom-control-label" for="checkbox2">
                  Encouragez le contenu généré par l'utilisateur parmi votre public
								</label>
							</div>

						</div>
					</div>

					<div class="w-full dis-none js-show-service11 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Pourquoi l'engagement social est au coeur de votre stratégie sociale">
								<label class="label-checkbox100" for="checkbox1">
                  Pourquoi l'engagement social est au coeur de votre stratégie sociale

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Soyez engagé">
								<label class="custom-control-label" for="checkbox2">
									Soyez engagé
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service12 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Qu'est-ce que le service client social et devrais-je le faire?">
								<label class="label-checkbox100" for="checkbox1">
                  Qu'est-ce que le service client social et devrais-je le faire?

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Comment atteindre les objectifs commerciaux par la vente sociale">
								<label class="custom-control-label" for="checkbox2">
                  Comment atteindre les objectifs commerciaux par la vente sociale
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service13 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Pourquoi la publicité numérique estelle importante pour votre stratégie entrante?">
								<label class="label-checkbox100" for="checkbox1">
                  Pourquoi la publicité numérique estelle importante pour votre stratégie entrante?

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Comment créer un contenu publicitaire remarquable">
								<label class="custom-control-label" for="checkbox2">
                  Comment créer un contenu publicitaire remarquable
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service14 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Comprendre les possibilités des reseaux sociaux">
								<label class="label-checkbox100" for="checkbox1">
                  Comprendre les possibilités des reseaux sociaux

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Déterminer vos dépenses publicitaires">
								<label class="custom-control-label" for="checkbox2">
									Déterminer vos dépenses publicitaires
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service15 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Pourquoi mesurer le retour sur investissement des médias sociaux?">
								<label class="label-checkbox100" for="checkbox1">
                  Pourquoi mesurer le retour sur investissement des médias sociaux?

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="L'audit des médias sociaux: comment comprendre votre succès avec les médias sociaux">
								<label class="custom-control-label" for="checkbox2">
                  L'audit des médias sociaux: comment comprendre votre succès avec les médias sociaux
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service16 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Comment mesurer le ROI social? ">
								<label class="label-checkbox100" for="checkbox1">
                  Comment mesurer le ROI social?

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Comment relier les mesures et transformer votre entreprise">
								<label class="custom-control-label" for="checkbox2">
                  Comment relier les mesures et transformer votre entreprise
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service17 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Les médias sociaux ne s'arrêtent pas là ! ">
								<label class="label-checkbox100" for="checkbox1">
                  Les médias sociaux ne s'arrêtent pas là !

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Comprendre la gouvernance des médias sociaux et les risques">
								<label class="custom-control-label" for="checkbox2">
                  Comprendre la gouvernance des médias sociaux et les risques
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service18 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Mettre en place un plan de gestion de crise">
								<label class="label-checkbox100" for="checkbox1">
                  Mettre en place un plan de gestion de crise

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Construire un programme de plaidoyer des employés">
								<label class="custom-control-label" for="checkbox2">
                  Construire un programme de plaidoyer des employés
								</label>
							</div>

						</div>
					</div>

          <div class="w-full dis-none js-show-service19 test">
						<div class="wrap-contact100-form-checkbox">
							<span class="label-input100">Quelles sont les sections faites?</span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="custom-control-label" id="checkbox1" type="checkbox" name="session[]" value="Projet">
								<label class="label-checkbox100" for="checkbox1">
                  Projet

								</label>
							</div>

							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="checkbox2" type="checkbox" name="session[]" value="Soutenance">
								<label class="custom-control-label" for="checkbox2">
                  Soutenance
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

            else if($(this).val() == "Semaine 13") {
							$('.test').slideUp();
							$('.js-show-service13').slideUp();
							$('.js-show-service13').slideDown();
						}

            else if($(this).val() == "Semaine 14") {
							$('.test').slideUp();
							$('.js-show-service14').slideUp();
							$('.js-show-service14').slideDown();
						}

            else if($(this).val() == "Semaine 15") {
							$('.test').slideUp();
							$('.js-show-service15').slideUp();
							$('.js-show-service15').slideDown();
						}

            else if($(this).val() == "Semaine 16") {
							$('.test').slideUp();
							$('.js-show-service16').slideUp();
							$('.js-show-service16').slideDown();
						}

            else if($(this).val() == "Semaine 17") {
							$('.test').slideUp();
							$('.js-show-service17').slideUp();
							$('.js-show-service17').slideDown();
						}

            else if($(this).val() == "Semaine 18") {
							$('.test').slideUp();
							$('.js-show-service18').slideUp();
							$('.js-show-service18').slideDown();
						}

            else if($(this).val() == "Semaine 19") {
							$('.test').slideUp();
							$('.js-show-service19').slideUp();
							$('.js-show-service19').slideDown();
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
