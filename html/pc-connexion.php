<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png" /> -->
    <meta name="viewport" content="width=1369, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="css/pc-connexion.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="pc-connexion" />
    <div class="container-center-horizontal">
      <div class="pc-connexion screen">
        <header class="header">
          <div class="place inter-extra-bold-white-96px">Arcadia</div>
          <div class="overlap-group-2">
            <a href="pc-accueil.php"> <div class="rectangle-1"></div></a>
            <div class="accueil inter-normal-black-36px">Accueil</div>
          </div>
          <div class="overlap-group">
            <a href="pc-service.php"> <div class="rectangle-1"></div></a>
            <div class="services inter-normal-black-36px">Services</div>
          </div>
          <div class="overlap-group">
            <a href="pc-habitat.php"> <div class="rectangle-1"></div></a>
            <div class="habitats inter-normal-black-36px">Habitats</div>
          </div>
          <div class="overlap-group-container">
            <div class="overlap-group-1">
              <a href="pc-connexion.php"> <div class="rectangle-1"></div></a>
              <div class="connexion inter-normal-black-32px">Connexion</div>
            </div>
            <div class="overlap-group-1">
              <a href="pc-contact.php"> <div class="rectangle-1"></div></a>
              <div class="place-1 inter-normal-black-36px">Contact</div>
            </div>
          </div>
          
          <!--CONNEXION-->
          <form action="connect.php" method="POST">
            <h1>CONNEXION</h1>
            <div class="connexion">
            <!--NOM UTILISATEUR--->
            <label for= "username">Username* :</label>
            <input type="username"  name="username" placeholder="Entrez votre nom utilisateur..." required>
            <br>
            <br>
            <!--MOT DE PASSE--->
            <label for= "password">Mot de passe* :</label>
            <input type="password" name="password" placeholder="Entrez votre mot de passe..." required>
            <br>
            <br>
            <input type="submit" value="Se connecter" />
            <a href="pc-tableau-de-bord.html"></a>
            </div>
        </form>

        <footer class="footer inter-normal-white-48px">
          <p class="horaires-tous-les-jours-10-h00-20-h00">
            <span class="inter-normal-white-48px">Horaires:<br /></span
            ><span class="inter-normal-white-32px"><br />Tous les jours<br /><br /></span
            ><span class="inter-normal-white-24px">10H00 - 20H00</span>
          </p>
          <p class="zoo-arcadia-17-rue">
            <span class="inter-normal-white-48px">Zoo Arcadia:<br /></span
            ><span class="inter-normal-white-32px"><br /></span
            ><span class="inter-normal-white-24px"
              >17 rue du Général de Gaulle, 35380 Paimpont<br /><br />02 50 48 74 19</span
            >
          </p>
        </footer>
      </div>
    </div>
  </body>
</html>
