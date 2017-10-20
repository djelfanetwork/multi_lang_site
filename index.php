<?php
session_start() ;
if (!isset($_SESSION['lang'])) {$_SESSION['lang'] = 'ar';}

switch ($_SESSION['lang']) {
			case 'ar':
				require_once 'inc/lang/ar/header.php';
				require_once 'inc/lang/ar/footer.php';
				break;
			case 'en':
				require_once 'inc/lang/en/header.php';
				require_once 'inc/lang/en/footer.php';
				break;
			case 'fr':
				require_once 'inc/lang/fr/header.php';
				require_once 'inc/lang/fr/footer.php';
				break;
			
			default:
				require_once 'inc/lang/ar/header.php';
				require_once 'inc/lang/ar/footer.php';
				break;
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- fav icon set -->
 	<link rel="icon" href="images/logo.png">
 	<!-- Meta tag -->
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="description" content="U-Tech">
 <!-- Css files link  -->
 <link rel="stylesheet" href="css/materialize.min.css">
 <link rel="stylesheet" href="css/matrial_icon.css">
<?= $_SESSION['lang'] == 'ar' ? ' <link rel="stylesheet" href="css/style-rtl.css">' : '<link rel="stylesheet" href="css/style.css">' ;?>
 <!-- Title -->
 <title>DjelfaNetwok | Loai Saied</title>
</head>
<body>
<!--Navbar-->
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">
  <img class="responsive-img" src="images/logo.png" alt="logo" > 
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse<?= $_SESSION['lang'] == 'ar' ? ' right' : '' ;?>"><i class="material-icons">menu</i></a>
     
      <ul id="nav-mobile" class="hide-on-med-and-down">
        <li><a href="#"><?= $home ;?></a></li>
        <li><a href="#"><?= $our_works ;?></a></li>
        <li><a href="#"><?= $about_us ;?></a></li>
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
      	<?php  
      	switch ($_SESSION['lang']) {
      		case 'ar':
      			echo '<img src="images/flag/sa.svg" class="flagimg" >عربي ' ;
      			break;
      		case 'en':
      			echo '<img src="images/flag/gb.svg" class="flagimg" >English';
      			break;
      		case 'fr':
      			echo '<img src="images/flag/fr.svg" class="flagimg" >Français';
      			break;
      	}
      	?>
      	<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#"><?= $home ;?></a></li>
        <li><a href="#"><?= $our_works ;?></a></li>
        <li><a href="#"><?= $about_us ;?></a></li>
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
      	<?php  
      	switch ($_SESSION['lang']) {
      		case 'ar':
      			echo '<img src="images/flag/sa.svg" class="flagimg" >عربي ' ;
      			break;
      		case 'en':
      			echo '<img src="images/flag/gb.svg" class="flagimg" >English';
      			break;
      		case 'fr':
      			echo '<img src="images/flag/fr.svg" class="flagimg" >Français';
      			break;
      	}
      	?>
      	<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>


    </div>
  </nav>
 <!-- Dropdown for navbar  -->
  <ul id="dropdown1" class="dropdown-content">
  <li><a href="language.php?lang=ar"><img src="images/flag/sa.svg" class="flagimg" ><?= $arabic ?></a></li>
  <li class="divider"></li>
  <li><a href="language.php?lang=en"><img src="images/flag/gb.svg" class="flagimg" ><?= $english ?></a></li>
   <li class="divider"></li>
  <li><a href="language.php?lang=fr"><img src="images/flag/fr.svg" class="flagimg" ><?= $france ?></a></li>
</ul>
<!--/.Navbar-->
<!-- Fisrt Parallax -->
     <div class="parallax-container">
      <div class="parallax"><img src="images/parallax-1.jpg"></div>

    </div>

    <div class="parallax-container">
      <div class="parallax"><img src="images/parallax-2.jpg"></div>
    </div>
<!--/ Footer -->
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12 footer-content1">
                <h5 class="white-text"><?= $footer_content_title  ;?></h5>
                <p class="grey-text text-lighten-4"><?= $footer_content_body  ;?></p>
              </div>
              <div class="col l4 offset-l2 s12 footer-content2">
                <h5 class="white-text"><?= $footer_content_link ;?></h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><?= $footer_content_link_li ;?></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><?= $footer_content_link_li ;?></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><?= $footer_content_link_li ;?></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><?= $footer_content_link_li ;?></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <?= $footer_copyright ;?>
            <a class="grey-text text-lighten-4" href="http://fb.com/saied.lak"><?= $footer_copyright_coded;?></a>
            </div>
          </div>
        </footer>
<!--/ Footer -->
<!-- JavaScript files link   -->
<script src="js/jquery-3.2.1.min.js"></script>

<script src="js/materialize.min.js"></script>
<script>

	   $(document).ready(function(){
      $('.parallax').parallax();
    });

</script>
<?= $_SESSION['lang'] == 'ar' ? '<script>$(".button-collapse").sideNav({	edge: "right"});</script>' : '<script>$(".button-collapse").sideNav();</script>';?>
</body>
</html>

