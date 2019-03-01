<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Parcours Oschool | Annuler une session ou en faire le compte-rendu</title>
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

		<script src="https://cdn.ckeditor.com/4.11.2/standard-all/ckeditor.js"></script>


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
              <input class="input100" type="text" name="formateur" value="{{Auth::user()->name}}">
            </div>
          </div>

          <div style="display: none;" class="wrap-input100 input100-select bg1">
            <span class="label-input100">User Id</span>
            <div>
              <input class="input100" type="text" name="user_id" value="{{Auth::user()->id}}">
            </div>
          </div>


          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Date prévue</span>
            <div>
              <input class="input100" type="text" name="date" value="{{$classroom->date}}" placeholder="{{$classroom->date}}" disabled>
            </div>
          </div>

          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Etudiant</span>
            <div>
              <input class="input100" type="text" name="etudiant" value="{{$classroom->etudiant}}" placeholder="{{$classroom->etudiant}}" disabled>
            </div>
          </div>

          <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Id Etudiant</span>
            <div>
              <input class="input100" type="text" name="date" value="{{$classroom->idEtudiant}}" placeholder="{{$classroom->idEtudiant}}" disabled>
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

					<div style="min-height: 30vh;height: auto;" class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "S'il vous plait, veuillez remplir ce champ">
						<span class="label-input100">Commentaire sur la séance</span>
						<textarea rows="300" contenteditable="true" id="commentaire" required class="input100" name="commentaire" placeholder="Faites ici un commentaire de la séance ....">
							<br> <strong><h2>Qu'est ce qui a été réalisé pendant la session ?</h2></strong> <br><br><br><br>
							<strong><h2>Que doit faire l'étudiant pour la prochaine session ?</h2></strong>
						</textarea>
					</div>

					<!-- <textarea name="editordata"></textarea> -->




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





		<script src="/ckeditor/ckeditor.js"></script>
		<script src="https://cdn.ckeditor.com/4.11.2/standard-all/ckeditor.js"></script>


		  <script>
		    // Turn off automatic editor creation first.
		    CKEDITOR.disableAutoInline = true;
		    CKEDITOR.inline( 'commentaire', {

		      toolbar: [{
		          name: 'document',
		          items: ['Print']
		        },
		        {
		          name: 'clipboard',
		          items: ['Undo', 'Redo']
		        },
		        {
		          name: 'styles',
		          items: ['Format', 'Font', 'FontSize']
		        },
		        {
		          name: 'colors',
		          items: ['TextColor', 'BGColor']
		        },
		        {
		          name: 'align',
		          items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
		        },
		        '/',
		        {
		          name: 'basicstyles',
		          items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting']
		        },
		        {
		          name: 'links',
		          items: ['Link', 'Unlink']
		        },
		        {
		          name: 'paragraph',
		          items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
		        },
		        {
		          name: 'insert',
		          items: ['Image', 'Table']
		        },
		        {
		          name: 'tools',
		          items: ['Maximize']
		        },
		        {
		          name: 'editing',
		          items: ['Scayt']
		        }
		      ],

		      extraAllowedContent: 'h3{clear};h2{line-height};h2 h3{margin-left,margin-top}',

		      // Adding drag and drop image upload.
		      extraPlugins: 'print,format,font,colorbutton,justify,uploadimage',
		      uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

		      // Configure your file manager integration. This example uses CKFinder 3 for PHP.
		      filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
		      filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
		      filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
		      filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',

		      height: 560,

		      removeDialogTabs: 'image:advanced;link:advanced'

		    } );


		</script>









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
