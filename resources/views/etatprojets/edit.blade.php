<!DOCTYPE html>
<html lang="fr">
	<head>
    <title>Oschool Paths | Tous les parcours Oschool</title>
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
				<img style="width: 40%;display: block;margin-left: auto;margin-right: auto;" src="/avatars/projects/{{$projet->image}}" alt="">
				<h2 style="margin: 25px 0px;">Evaluation du projet: {{$etatprojet->projet}}</h2>
        <a target="_blank" href="{{$projet->enonce}}"> <h4>Voir l'énoncé</h4> </a>
        <a target="_blank" href="{{$etatprojet->livrables}}"> <h4>Voir les livrables de {{$user->name}}</h4> </a>
        <h4>Formation concernée:
            @foreach($projet->formations as $formation)
            {{$formation->nom}},
            @endforeach
            </h4>
				<form style="margin-top: 20px;" method="post" enctype="multipart/form-data" action="{{ url('etatprojets', $etatprojet) }}" class="contact100-form validate-form">
					{{ csrf_field() }}
          {{ method_field('patch') }}

          <div class="wrap-input100 input100-select bg1">
						<span class="label-input100">PROJET</span>
                        <div class="form-group has-warning has-feedback">
	                        <label for="inputWarning2">Identifiant du projet</label>
	                        <input readonly value="{{$projet->id}}" name="projet_id" type="text" class="form-control" id="inputWarning2">
	                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                        </div>
					</div>

          <div class="wrap-input100 input100-select bg1">
						<span class="label-input100">PROJET</span>
                        <div class="form-group has-warning has-feedback">
	                        <label for="inputWarning2">Nom du projet</label>
	                        <input readonly value="{{$projet->titre}}" name="projet" type="text" class="form-control" id="inputWarning2">
	                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                        </div>
					</div>



					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">LIVRABLES</span>
                        <div class="form-group has-warning has-feedback">
	                        <input readonly value="{{$etatprojet->livrables}}" required name="livrables" type="url" class="form-control" id="inputWarning2">
	                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                        </div>
					</div>

					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Statut*</span>
						<div>
							<select required class="js-select2" name="statut">
							    <option>A refaire</option>
							    <option>Validé</option>
							</select>
							<div class="dropDownSelect3"></div>
						</div>
					</div>

					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "S'il vous plait, veuillez taper votre massage">
						<span class="label-input100">Commentaire</span>
						<textarea id="summernote" class="input100" name="commentaire" ></textarea>
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
  		$(".js-select2").each(function(){
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
