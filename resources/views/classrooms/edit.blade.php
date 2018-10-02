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
				<img style="width: 40%;display: block;margin-left: auto;margin-right: auto;" src="/formcreate/images/img-01.png" alt="">
				<h2 style="margin: 25px 0px;">Annuler une session ou faire le compte-rendu</h2>
				<form method="post" enctype="multipart/form-data" action="{{ url('classrooms', $classroom) }}" class="contact100-form validate-form">
					{{ csrf_field() }}
          {{ method_field('patch') }}
          <div style="display: none;" class="wrap-input100 input100-select bg1">
            <span class="label-input100">Formateur</span>
            <div>
              <input type="text" name="formateur" value="{{Auth::user()->name}}">
            </div>
          </div>

          <div style="display: none;" class="wrap-input100 input100-select bg1">
            <span class="label-input100">User Id</span>
            <div>
              <input type="text" name="user_id" value="{{Auth::user()->id}}">
            </div>
          </div>


          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Date prévue</span>
            <div>
              <input type="text" name="date" value="{{$classroom->date}}" placeholder="{{$classroom->date}}" disabled>
            </div>
          </div>

          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Etudiant</span>
            <div>
              <input type="text" name="etudiant" value="{{$classroom->etudiant}}" placeholder="{{$classroom->etudiant}}" disabled>
            </div>
          </div>

          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Id Etudiant</span>
            <div>
              <input type="text" name="date" value="{{$classroom->idEtudiant}}" placeholder="{{$classroom->idEtudiant}}" disabled>
            </div>
          </div>

          <div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Statut*</span>
						<div>
							<select class="js-select3" name="statut">
							    <option>Réalisée</option>
							    <option>Annulée</option>
							</select>
							<div class="dropDownSelect3"></div>
						</div>
					</div>

					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "S'il vous plait, veuillez remplir ce champ">
						<span class="label-input100">Commentaire sur la séance</span>
						<textarea required class="input100" name="commentaire" placeholder="Faites ici un commentaire de la séance ...."></textarea>
					</div>




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
