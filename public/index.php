<?php
if(isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['content'])) {
	$to = "kiadyrazafindrabe@gmail.com";
	$subject = $_POST["subject"];

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<p>".$_POST["content"]."</p>
	</body>
	</html>
	";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <'.$_POST["mail"].'>' . "\r\n";

	mail($to,$subject,$message,$headers);
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Kiady Bezaka | Portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kiady Bezaka - Photographer and Front End Developer">
	<meta property="og:url" content="http://kiadybezaka.com/">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Développeur &amp; Photographe">
    <meta property="og:description" content="Je m'appelle Razafindrabe Burel Kiady Bezaka et je suis  passionné par le web et la photographie.">
    <meta property="og:image" content="http://kiadybezaka.com/images/banner/facebook.jpg">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-112403253-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-112403253-1');
      
    </script>
    <link rel="icon" href="images/icons/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">
  </head>
  <body>
    <div class="wrapper">
      <header class="section-header js-sticky-header">
        <h1><a href="#" class="section-header__logo js-test-btn">Kiady Bezaka</a></h1>
        <div class="section-header__navigation"><a href="#photographer" class="section-header__link">Photographe</a><a href="#developer" class="section-header__link">Developpeur</a><a href="#contact" class="section-header__link">Contact</a></div>
      </header>
      <main>
        <div class="section-slider">
          <div class="section-slider__content">
            <picture class="product-category__img">
              <source srcset="images/banner/banner-480.jpg" media="(max-width: 480px)">
              <source srcset="images/banner/banner-768.jpg" media="(max-width: 768px)">
              <source srcset="images/banner/banner-1200.jpg" media="(max-width: 1200px)"><img src="images/banner/banner-1920.jpg" width="1920" height="500" alt="banner kiady bezaka">
            </picture>
          </div>
          <div class="section-content">
            <div class="section-content__portfolio"><img src="images/avatar/kiadybezaka.jpg" height="200" width="200" alt="avatar kiay bezaka" class="portfolio__img">
              <p class="portfolio__first-name">Razafindrabe</p>
              <p class="portfolio__name">Burel Kiady Bezaka</p>
            </div>
            <div class="section-content__about">
              <h2 class="about__title">Développeur &amp; Photographe</h2>
              <p class="about__content">Je m'appelle Razafindrabe Burel Kiady Bezaka et je suis  passionné par le web et la photographie. Développeur Front End après l'obtention de mon diplôme de Licence en Web et Design à l'IT University en 2016 et Photographe individuel depuis 2015. Si mon profil vous intéresse, n'hésitez pas à me contacter. </p>
            </div>
          </div>
        </div>
        <div class="section-content mobile-only">
          <div class="section-content__about">
            <h2 class="about__title">Développeur &amp; Photographe</h2>
            <p class="about__content">Je m'appelle Razafindrabe Burel Kiady Bezaka et je suis passionné par le web et la photographie. Développeur Front End après l'obtention de mon diplôme de Licence en Web et Design à l'IT University en 2016 et Photographe individuel depuis 2015. Si mon profil vous intéresse, n'hésitez pas à me contacter. </p>
          </div>
        </div>
        <div id="photographer" class="section-album">
          <h2 class="section-album__title">Galerie</h2>
          <p class="section-album__description">Les photos que j'ai prises</p><img src="images/logos/logob.png" height="500" width="200" alt="logo kiady bezaka" class="section-album__logo">
          <div class="section-album__content desktop-only"><a href="images/gallery/wedding-renhaut-diary.jpg" data-lightbox="wedding-renhaut-diary" data-title="Wedding - Renhaut &amp; Diary"><span class="hide-only">Album image</span><img src="images/gallery/wedding-renhaut-diary.jpg" height="1920" width="800" alt="wedding-renhaut-diary" class="section-album__img js-parallax"></a></div>
          <div class="section-album__content">
            <div class="section-album__box-img"><a href="images/gallery/wedding-eric-felana.jpg" data-lightbox="wedding-renhaut-diary" data-title="Wedding - Eric &amp; Felana"><span class="hide-only">Album image</span><img src="images/gallery/wedding-eric-felana.jpg" height="1920" width="800" alt="wedding-eric-felana" class="section-album__img"></a></div>
            <div class="section-album__box-img"><a href="images/gallery/wedding-renhaut-diary-2.jpg" data-lightbox="wedding-renhaut-diary" data-title="Wedding - Renhaut &amp; Diary"><span class="hide-only">Album image</span><img src="images/gallery/wedding-renhaut-diary-2.jpg" height="1920" width="800" alt="wedding-renhaut-diary" class="section-album__img"></a></div>
            <div class="section-album__box-img"><a href="images/gallery/wedding-rivo-mirantsoa.jpg" data-lightbox="wedding-renhaut-diary" data-title="Wedding - Rivo &amp; Mirantsoa"><span class="hide-only">Album image</span><img src="images/gallery/wedding-rivo-mirantsoa.jpg" height="1920" width="800" alt="wedding-rivo-mirantsoa" class="section-album__img"></a></div>
            <div class="section-album__box-img"><a href="images/gallery/wedding-fabrice-annie.jpg" data-lightbox="wedding-renhaut-diary" data-title="Wedding - Fabrice &amp; Annie"><span class="hide-only">Album image</span><img src="images/gallery/wedding-fabrice-annie.jpg" height="1920" width="800" alt="wedding-fabrice-annie" class="section-album__img"></a></div>
            <div class="section-album__box-img"><a href="images/gallery/wedding-eric-felana-2.jpg" data-lightbox="wedding-renhaut-diary" data-title="Wedding - Eric &amp; Felana"><span class="hide-only">Album image</span><img src="images/gallery/wedding-eric-felana-2.jpg" height="1920" width="800" alt="wedding-eric-felana-2" class="section-album__img"></a></div>
          </div>
        </div>
        <div class="section-tarif">
          <div class="section-tarif__content">
            <div class="section-tarif__service">
              <h2>Mon tarif</h2>
              <p>Concernant mes prestations photographiques, je vous propose un tarif abordable avec un rapport qualité-prix exceptionnel. Réaliser les photos dont vous aviez rêvés et capturer vos emotions restent mes 2 principaux objectifs. Guider par la passion et ma motivation, je vous garantis des superbes photos.</p>
              <p>Mon tarif journalier minimum est de &nbsp;<strong>120€ HT/jours</strong></p>
            </div>
            <div class="section-tarif__gear">
              <h2>Fiche technique</h2>
              <ul>
                <li>Nikon D700 &amp; D7000</li>
                <li>Sigma APO 70-200 f2.8</li>
                <li>Sigma 24-70 f2.8</li>
                <li>Sigma 10-20 f4-5.6</li>
              </ul>
            </div>
          </div>
        </div>
        <div id="developer" class="section-road">
          <h2 class="section-road__title">Mon parcours</h2>
          <p class="section-road__description">Experience professionnel</p>
          <div class="section-road__content">
            <div class="section-road__item"><strong class="section-road__date">Depuis Janvier 2017</strong>
              <p class="section-road__name">Proximity BBDO Indian Ocean</p>
              <p class="section-road__job-title">Developpeur Front-End</p>
              <p class="section-road__job-description"><strong>Technologie :</strong>&nbsp;Node.js, Jade, Gulp, Sass, HTML 5, CSS 3, JQuery, Sitecore</p>
            </div>
            <div class="section-road__item"><strong class="section-road__date">Depuis Décembre 2016</strong>
              <p class="section-road__name">BICI</p>
              <p class="section-road__job-title">iT-Consultant</p>
            </div>
            <div class="section-road__item"><strong class="section-road__date">Juillet - Novembre 2016</strong>
              <p class="section-road__name">ARIARY.NET</p>
              <p class="section-road__job-title">Developpeur web</p>
              <p class="section-road__job-description"><strong>Technologie :</strong>&nbsp;Symfony, HTML 5, CSS 3, JQuery</p>
            </div>
            <div class="section-road__item"><strong class="section-road__date">2013-2016</strong>
              <p class="section-road__name">Licence en Web et Design</p>
              <p class="section-road__job-title">IT-University</p>
            </div>
            <div class="section-road__item"><strong class="section-road__date">2013</strong>
              <p class="section-road__name">BACC Série C</p>
              <p class="section-road__job-title">Institution Sainte Famille Mahamasina</p>
              <p class="section-road__job-description"><strong>Mention :</strong>&nbsp;Assez-Bien</p>
            </div>
          </div>
        </div>
        <div class="section-skill">
          <h2 class="section-skill__title">Mes compétences</h2>
          <p class="section-skill__description">Ce que je sais faire</p>
          <div class="section-skill__content">
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">HTML5</h3><span class="section-skill__box-xp">1 an d'experience</span><img src="images/logos/html5.png" height="100" width="100" alt="html5" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">CSS3</h3><span class="section-skill__box-xp">1 an d'experience</span><img src="images/logos/css3.png" height="100" width="100" alt="css3" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">Javascript</h3><span class="section-skill__box-xp">1 an d'experience</span><img src="images/logos/js.png" height="100" width="100" alt="js" class="section-skill__box-img">
            </div>
          </div>
          <div class="section-skill__separator">
            <p class="section-skill__subtitle">Technologies</p>
          </div>
          <div class="section-skill__content">
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">Windows</h3><span class="section-skill__box-xp">OS principal</span><img src="images/logos/win.png" height="100" width="100" alt="win" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">Git</h3><span class="section-skill__box-xp">Versioning</span><img src="images/logos/git.png" height="100" width="100" alt="git" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">Gulp</h3><span class="section-skill__box-xp">Automatisation</span><img src="images/logos/gulp.png" height="100" width="100" alt="gulp" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">JQuery</h3><span class="section-skill__box-xp">Bibliothèque Js</span><img src="images/logos/jquery.png" height="100" width="100" alt="jquery" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">Node.js</h3><span class="section-skill__box-xp">Serveur Js</span><img src="images/logos/node.jpg" height="100" width="100" alt="node" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">MySql</h3><span class="section-skill__box-xp">BDD</span><img src="images/logos/mysql.png" height="100" width="100" alt="mysql" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">JAVA</h3><span class="section-skill__box-xp">Développement</span><img src="images/logos/java.png" height="100" width="100" alt="java" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">PHP</h3><span class="section-skill__box-xp">Développement</span><img src="images/logos/php.jpg" height="100" width="100" alt="php" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">Android Studio</h3><span class="section-skill__box-xp">Développement</span><img src="images/logos/android.jpg" height="100" width="100" alt="android" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">Photoshop</h3><span class="section-skill__box-xp">Retouche</span><img src="images/logos/ps.jpg" height="100" width="100" alt="ps" class="section-skill__box-img">
            </div>
            <div class="section-skill__box">
              <h3 class="section-skill__box-title">Lightroom</h3><span class="section-skill__box-xp">Retouche</span><img src="images/logos/lr.png" height="100" width="100" alt="lr" class="section-skill__box-img">
            </div>
          </div>
        </div>
        <div id="contact" class="section-contact">
          <h2 class="section-contact__title">Contact</h2>
          <form action="#" method="POST" class="section-contact__content">
            <div class="section-contact__input-group">
              <label for="name" class="hide-only">name</label>
              <input id="name" name="name" type="text" placeholder="Votre nom" required="">
              <label for="mail" class="hide-only">mail</label>
              <input id="mail" name="mail" type="email" placeholder="Votre adresse mail" required="">
              <label for="subject" class="hide-only">subject</label>
              <input id="subject" name="subject" type="text" placeholder="Le sujet de votre message ..." required="">
            </div>
            <div class="section-contact__input">
              <label for="message" class="hide-only">message</label>
              <textarea id="message" name="content" placeholder="Votre message ici ..." required=""></textarea>
            </div>
            <div class="section-contact__btn">
              <button type="submit">Envoyer</button>
            </div>
          </form>
        </div>
      </main>
      <footer>
        <div class="footer__copyright">&copy; kiadybezaka - 2017</div>
        <div class="footer__icons"><a href="https://github.com/kiadybezaka" target="_blank" rel="noopener noreferrer"><span class="hide-only">github</span><i class="fa fa-github"></i></a><a href="https://www.linkedin.com/in/kiadybezaka/" target="_blank" rel="noopener noreferrer"><span class="hide-only">linkedin</span><i class="fa fa-linkedin"></i></a><a href="http://mg.viadeo.com/fr/profile/kiadybezaka" target="_blank" rel="noopener noreferrer"><span class="hide-only">viadeo</span><i class="fa fa-viadeo"></i></a><a href="https://www.facebook.com/kiadybezakaphotography/" target="_blank" rel="noopener noreferrer"><span class="hide-only">facebook</span><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/kiadybezaka/" target="_blank" rel="noopener noreferrer"><span class="hide-only">instagram</span><i class="fa fa-instagram"></i></a></div>
      </footer>
      <div class="footer__navigation"><a href="#photographer" class="section-header__link">Photographe</a><a href="#developer" class="section-header__link">Developpeur</a><a href="#contact" class="section-header__link">Contact</a></div>
      <script src="scripts/app.js"></script>
    </div>
  </body>
</html>