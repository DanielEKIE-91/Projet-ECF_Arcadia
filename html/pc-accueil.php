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
    <link rel="stylesheet" type="text/css" href="css/pc-accueil.css" />
    <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="css/globals.css" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="pc-accueil" />
    <div class="container-center-horizontal">
      <div class="pc-accueil screen">
        <div class="overlap-group6">
          <img
            class="img_20210529_111027-scaled-1"
            src="img/img-20210529-111027-scaled-1.png"
            alt="IMG_20210529_111027-scaled 1"
          />
          <div class="overlap-group5">
            <div class="rectangle-2"></div>
            <p class="bienvenue-dans-le-pa inter-normal-black-48px">
              <br />Bienvenue dans le parc animalier, zoo Arcadia, qui se situe en France près de la forêt de
              Brocéliande, en bretagne depuis 1960. Profitez à découvrir notre parc pour voir les animaux.
            </p>

            <!--HEADER-->
            <header class="header">
              <div class="place inter-extra-bold-white-96px">Arcadia</div>
              <div class="overlap-group1"><div class="accueil inter-normal-black-36px">Accueil</div></div>
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
            </header>
          </div>
        </div>
        <div class="Images">
          <img class="restaurant-1" src="img/restaurant-1.png" alt="restaurant 1" />
          <img class="jungle-1" src="img/jungle-1.png" alt="jungle 1" />
          <img class="toucan-jungle-1" src="img/toucan-jungle-1.png" alt="toucan jungle 1" />
        </div>

      <!--AVIS-->
      <form action="avis.php" method="POST">
      <h1>Les avis</h1>
      <div class="avis">
        <input type="text"  name="avis"  >
        <br>
        <br>
        <label for= "pseudo">Pseudo :</label>
        <br>
        <br>
        <input type="pseudo"  name="pseudo" placeholder="Entrez votre pseudo..."> 
        <br>
        <br>
        <label for= "commentaire">Laissez un commentaire :</label>
        <br>
        <br>
        <input type="commentaire"  name="commentaire" placeholder="Laissez un commentaire..." >
      </div>
      <br>
      <br>
        <div class="envoyer">
          <input type="submit" value="Envoyer" />
      </div>
      </form>
        <br>
        <br>
        <br>
        <br>
        <br>
      <!--FOOTER-->
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
