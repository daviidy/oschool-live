<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Parcours Oschool | Ajouter une progression</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="/sessions/images/icons/image-profil.png"/>
    <!--===============================================================================================-->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
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
				<img style="width: 40%;display: block;margin:auto;" src="/formcreate/images/img-02.png" alt="">
				<h2 style="margin: 25px 0px;">Ajouter une progression</h2>
				<form method="post" enctype="multipart/form-data" action="{{ route('progressions.store') }}" class="contact100-form validate-form">
					{{ csrf_field() }}
          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Titre de la progression</span>
              <input class="input100" type="text" name="titre" value="" required>
          </div>

          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">URL du support</span>
              <input class="input100" type="url" name="lien" value="" required>
          </div>

					<div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Tyoe de la progression</span>
            <div>
              <select class="js-select3" name="formation_id">
                <option value="texte">Texte</option>
								<option value="video">Vidéo</option>
              </select>
              <div class="dropDownSelect3"></div>
            </div>
          </div>

          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Formation</span>
            <div>
              <select class="js-select3" name="formation_id">
                @foreach($formations as $formation)
                <option value="{{$formation->id}}">{{$formation->nom}}</option>
                @endforeach
              </select>
              <div class="dropDownSelect3"></div>
            </div>
          </div>

					<div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Confirmez la formation</span>
            <div>
              <select class="js-select3" name="formation">
                @foreach($formations as $formation)
                <option value="{{$formation->nom}}">{{$formation->nom}}</option>
                @endforeach
              </select>
              <div class="dropDownSelect3"></div>
            </div>
          </div>

					<div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Pour quel projet cette progression sera t-elle utile ?</span>
            <div>
              <select class="js-select3" name="projet_id">
                @foreach($projets as $projet)
                <option value="{{$projet->id}}">{{$projet->titre}}</option>
                @endforeach
              </select>
              <div class="dropDownSelect3"></div>
            </div>
          </div>



					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							<span>
								Créer la progression
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>

						<p style="margin-top: 10px;"> <a href="{{url('home')}}">Retour au tableau de bord</a> </p>
					</div>
				</form>
			</div>
		</div>



	<!--===============================================================================================-->
		<script src="/sessions/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->

	<!--===============================================================================================-->
		<script src="/sessions/vendor/select2/select2.min.js"></script>

		<script type="text/javascript">

		$(document).ready(function(){

			$('#summernote').summernote({
	        placeholder: 'Faites un commentaire sur la séance (ce qui a été fait, ce qui reste à faire.....ou la raison de l\'annulation de la séance...)',
	        tabsize: 2,
	        height: 300
	      });

		});

		</script>

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
