<?php function monthTranslate($month) {
	switch ($month) {
		case 1: 
		$newName = 'января';
		break;
		case 2:
		$newName = 'февраля';
		break;
		case 3:
		$newName = 'марта';
		break;
		case 4:
		$newName = 'апреля';
		break;
		case 5:
		$newName = 'мая';
		break;
		case 6:
		$newName = 'июня';
		break;
		case 7:
		$newName = 'июля';
		break;
		case 8:
		$newName = 'августа';
		break;
		case 9:
		$newName = 'сентября';
		break;
		case 10:
		$newName = 'октября';
		break;
		case 11:
		$newName = 'ноября';
		break;
		case 12:
		$newName = 'декабря';
		break;
	}
	
	return $newName;
}

date_default_timezone_set('Europe/Moscow');

$currentDate = new DateTime("now");

if ( $currentDate->format('H') > 0 ) :
$currentDate->modify('+1 day');

endif;

$dateDay1Text = $currentDate->format('d');

$dateMonthText = monthTranslate( $currentDate->format('n') );

?>