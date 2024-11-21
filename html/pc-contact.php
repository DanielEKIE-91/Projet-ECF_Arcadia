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
    <link rel="stylesheet" type="text/css" href="css/pc-contact.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="pc-contact" />
    <div class="container-center-horizontal">
      <div class="pc-contact screen">
        <header class="header">
          <div class="place inter-extra-bold-white-96px">Arcadia</div>
          <div class="overlap-group4 overlap">
            <a href="pc-accueil.php"> <div class="rectangle-1"></div></a>
            <div class="accueil inter-normal-black-36px">Accueil</div>
          </div>
          <div class="overlap-group overlap">
            <a href="pc-service.php"> <div class="rectangle-1"></div></a>
            <div class="services inter-normal-black-36px">Services</div>
          </div>
          <div class="overlap-group overlap">
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
              <div class="place-1 place-3 inter-normal-black-36px">Contact</div>
            </div>
          </div>
        
          <!--FORMULAIRE DE CONTACT-->
          <form action="contact.php" method="POST">
        <h1>CONTACT</h1>
        <br>
        <!--NOM--->
        <label for= "surname">Nom* :</label>
        <input type="text" name="surname" placeholder="Entrez votre nom..." required>
        <br>
        <br>
        <!--TITRE--->
        <label for= "titre">Titre* :</label>
        <input type="text" name="pseudo" placeholder="Entrez votre titre..." required>
        <br>
        <br>
        <!--DESCRIPTION--->
        <label for= "description">Description :</label>
        <input type="text"  name="description" placeholder="Entrez votre description...">
        <br>
        <br>
        <input type="submit" value="Se connecter" />
    </form>

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
