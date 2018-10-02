<!DOCTYPE html>
<html xmlns=3D "http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv=3D "Content-Type" content=3D "text/html; charset=3Dutf-8" />
  <meta name=3D "viewport" content=3D "initial-scale=3D1.0, minimum-scale=3D1.0=
, maximum-scale=3D1.0, user-scalable=3Dno" />
  <style type=3D "text/css">
    a,
    u,
    b {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <table style="width:100%;max-width:960px;position: relative;left:0;right:0;margin: 0 auto;border-collapse: collapse;border-spacing: 0;font-size: 14px;line-height: 24px;color: #333;font-family: Microsoft YaHei;">
    <tr>
      <td style="padding: 20px 7.5% 0;display: block;"><img width="100" src="https://code.oschool.ci/avilon/img/logo-oschool.png" /></td>
    </tr>
    <tr>
      <td style="padding: 20px 7.5% 0;">Hello David ,</td>
    </tr>

    <tr>
      <td style="padding: 20px 7.5% 0;">Nous vous informons qu'un utilisateur a été ajouté(e) à une formation. Voici ses infos:</td>
    </tr>

    <tr>
      <td style="padding: 20px 7.5% 0;"> Utilisateur: <strong>{{$user->name}}</strong> <br>
        Formation(s) <br>
        @foreach($user->formations as $formation)
        <b style="margin: 0;text-decoration:none;">{{$formation->nom}}</b> <br>
        @endforeach
        Pour en savoir plus <a href="{{url('users', $user)}}">consulte les infos de l'utilisateur</a>
      </td>
    </tr>


    <tr>
      <td style="padding: 20px 7.5% 117px;">Cordialement,<br>Oschool</td>
    </tr>

  </table>
  <table style="width:100%;max-width:960px;position: relative;left:0;right:0;margin: 0 auto;text-align: center;border-collapse: collapse;border-spacing: 0;font-size: 12px;line-height: 24px;font-family: Microsoft YaHei;">
    <tr>
      <td style="display: block; height: 16px;border-top:#efefef solid 1px;background: -webkit-radial-gradient(top, ellipse farthest-side, rgba(251,251,251,1), rgba(255,255,255,0));background: -o-radial-gradient(top, ellipse farthest-side, rgba(251,251,251,1), rgba(255,255,255,0));background: -moz-radial-gradient(top, ellipse farthest-side, rgba(251,251,251,1), rgba(255,255,255,0));background: radial-gradient(top, ellipse farthest-side, rgba(251,251,251,1), rgba(255,255,255,0));">
</td>
    </tr>

    <tr>

      <td style="padding-bottom: 2px;"><a href="https://oschool.ci/tous-nos-cours/" target="blank" style="color: #7f7f7f;text-decoration:none;">Voir tous nos cours</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="#" target="blank" style="color: #7f7f7f;text-decoration:none;">Abidjan, Côte d'Ivoire
        </a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://discord.gg/hhbzcHE" target="blank" style="color: #7f7f7f;text-decoration:none;">Rejoignez notre communauté !</a></td>

    </tr>

    <tr>

    </tr>

  </table>
</body>

</html>
