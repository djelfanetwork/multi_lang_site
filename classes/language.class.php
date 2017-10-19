<?php



/**
* 
*/
class Language
{
	private $_Userlang ;

	function __construct($lang)
	{
		$this->$_Userlang = $lang ;
	}

	public function setLang(){
		switch ($this->$_Userlang) {
			case 'ar':
				return require '../inc/lang/ar/header.php';
				break;
			case 'en':
				return require '../inc/lang/en/header.php';
				break;
			case 'fr':
				return require '../inc/lang/fr/header.php';
				break;
			
			default:
				return require '../inc/lang/en/header.php';
				break;
		}

	}
}