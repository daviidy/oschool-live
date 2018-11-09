<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta content="telephone=no" name="format-detection" />
	<!-- Facebook sharing information tags -->
	<title>Bienvenue à Oschool !</title>


	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; -webkit-text-size-adjust:none; background-image:url(images/background.jpg); background-position:0 0; background-repeat:no-repeat repeat-y }
		a { color:#7ba436; text-decoration:underline }

		/* Campaign Monitor wraps the text in editor in paragraphs. In order to preserve design spacing we remove the padding/margin */
		p { padding:0 !important; margin:0 !important }
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; -webkit-text-size-adjust:none; background-image:url(images/background.jpg); background-position:0 0; background-repeat:no-repeat repeat-y">

<table width="100%" border="0" cellspacing="0" cellpadding="0" background="/email/images/background.jpg" style="background-image: url(images/background.jpg); background-position: 0 0; background-repeat: no-repeat repeat-y; background-color: #fcfcfc">
	<tr>
		<td align="center" valign="top">
			<!-- Header -->
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
				<tr>
					<td align="center">
						<div style="font-size:0pt; line-height:0pt; height:12px"><img src="/email/images/empty.gif" width="1" height="12" style="height:12px" alt="" /></div>

						<table width="620" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left"><a href="#" target="_blank"><img src="/email/images/logo.png" alt="" border="0" width="150" height="40" /></a></td>

							</tr>
						</table>
						<div style="font-size:0pt; line-height:0pt; height:5px"><img src="/email/images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

					</td>
				</tr>
			</table>
			<!-- END Header -->

			<!-- Hero -->
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#7dd7f8">
				<tr>
					<td class="img-center" style="font-size:0pt; line-height:0pt; text-align:center"><a href="#" target="_blank"><img src="/email/images/slider.png" alt="" border="0" width="620" height="331" /></a></td>
				</tr>
			</table>


			<!-- END Hero -->
			<div style="font-size:0pt; line-height:0pt; height:40px"><img src="/email/images/empty.gif" width="1" height="40" style="height:40px" alt="" /></div>


			<!-- Content -->
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="center">
						<table width="620" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
								<td valign="top" width="360" class="text" style="color:#7d7d7d; font-family:Arial; font-size:12px; line-height:20px; text-align:left">
									<div>
										<div class="h2-blue" style="color:#509bcb; font-family:'Trebuchet MS'; font-size:22px; line-height:26px; text-align:left; font-weight:bold"><div>Votre renouvellement a été effectué avec succès, {{$achat->prenoms}} !</div></div>
										<div style="font-size:0pt; line-height:0pt; height:10px"><img src="/email/images/empty.gif" width="1" height="10" style="height:10px" alt="" /></div>


										<div class="img" style="font-size:0pt; line-height:0pt; text-align:left"><img src="/email/images/separator1.jpg" alt="" border="0" width="360" height="2" /></div>
										<div style="font-size:0pt; line-height:0pt; height:15px"><img src="/email/images/empty.gif" width="1" height="15" style="height:15px" alt="" /></div>


										<div>Votre renouvellement à la formation {{$achat->formation}} en télé présentiel, a été enregistré avec succès !</div>

										<div class="">L'abonnement est valide jusqu'au {{ Carbon\Carbon::parse($achat->student->fin_abonnement)->format('d-m-Y H:i') }}</div>

									</div>


								</td>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="31"></td>

							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- END Content -->
			<div style="font-size:0pt; line-height:0pt; height:35px"><img src="/email/images/empty.gif" width="1" height="35" style="height:35px" alt="" /></div>


			<!-- Footer -->
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#3cc6f3">
				<tr>
					<td valign="top">
						<div style="font-size:0pt; line-height:0pt; height:1px; background:#33a8cf; "><img src="/email/images/empty.gif" width="1" height="1" style="height:1px" alt="" /></div>

						<div style="font-size:0pt; line-height:0pt; height:1px; background:#9ee3f9; "><img src="/email/images/empty.gif" width="1" height="1" style="height:1px" alt="" /></div>

					</td>
					<td valign="top" align="center" width="620">
						<div class="img" style="font-size:0pt; line-height:0pt; text-align:left">
							<img src="/email/images/footer_shadow.jpg" alt="" border="0" width="620" height="13" />
						</div>
						<div style="font-size:0pt; line-height:0pt; height:10px"><img src="/email/images/empty.gif" width="1" height="10" style="height:10px" alt="" /></div>

						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="center">
									<table border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td class="img" style="font-size:0pt; line-height:0pt; text-align:left"><a href="https://www.facebook.com/Oschool.ci/" target="_blank"><img src="/email/images/facebook.jpg" alt="" border="0" width="45" height="45" /></a></td>
											<td class="img" style="font-size:0pt; line-height:0pt; text-align:left"><a href="https://twitter.com/OschoolCi" target="_blank"><img src="/email/images/twitter.jpg" alt="" border="0" width="45" height="45" /></a></td>
											<td class="img" style="font-size:0pt; line-height:0pt; text-align:left"><a href="https://www.youtube.com/channel/UCwlYc8yREmfhMqrS5bFrzEg?view_as=subscriber" target="_blank"><img src="/email/images/youtube.jpg" alt="" border="0" width="45" height="45" /></a></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<div style="font-size:0pt; line-height:0pt; height:20px"><img src="/email/images/empty.gif" width="1" height="20" style="height:20px" alt="" /></div>




					</td>
					<td valign="top">
						<div style="font-size:0pt; line-height:0pt; height:1px; background:#33a8cf; "><img src="/email/images/empty.gif" width="1" height="1" style="height:1px" alt="" /></div>

						<div style="font-size:0pt; line-height:0pt; height:1px; background:#9ee3f9; "><img src="/email/images/empty.gif" width="1" height="1" style="height:1px" alt="" /></div>

					</td>
				</tr>
			</table>
			<!-- END Footer -->
		</td>
	</tr>
</table>

</body>
</html>
