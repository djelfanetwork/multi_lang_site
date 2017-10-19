<?php
session_start();
ob_start() ;

if (isset($_GET['lang'])) {
 
	 if ($_GET['lang']=='ar') {
	 	$_SESSION['lang'] = 'ar' ;
	 	if(isset($_SERVER['HTTP_REFERER'])) {
    		$previous = $_SERVER['HTTP_REFERER'];
    		header('Location: '.$previous) ;
		}else{
 			header('Location: index.php') ;
	}
	 	
	 }elseif ($_GET['lang']=='en') {
	 	$_SESSION['lang'] = 'en' ;
	 	if(isset($_SERVER['HTTP_REFERER'])) {
    		$previous = $_SERVER['HTTP_REFERER'];
    		header('Location: '.$previous) ;
		}else{
 			header('Location: index.php') ;
			}
	 }elseif ($_GET['lang']=='fr') {
	 	$_SESSION['lang'] = 'fr' ;
	 	if(isset($_SERVER['HTTP_REFERER'])) {
    		$previous = $_SERVER['HTTP_REFERER'];
    		header('Location: '.$previous) ;
		}else{
 			header('Location: index.php') ;
			}
	 }else{
	 	if(isset($_SERVER['HTTP_REFERER'])) {
    		$previous = $_SERVER['HTTP_REFERER'];
    		header('Location: '.$previous) ;
		}else{
 			header('Location: index.php') ;
			}
	 }
}


/*
if ($_SESSION['lang'] == 'ar') {
      		echo '<img src="images/flag/sa.svg" class="flagimg" >عربي ' ;
      	}else {
      		echo '<img src="images/flag/gb.svg" class="flagimg" >English';
      	}
 */

?>