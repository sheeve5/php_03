<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){
    $form['kwota'] = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
    $form['lata'] = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
    $form['procent'] = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){

    	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['procent']))) {
		return false;
	}

	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

    	if ( $form['kwota'] == "") $msgs [] = 'Nie podano liczby 1';
	if ( $form['lata'] == "") $msgs [] = 'Nie podano liczby 2';
	if ( $form['procent'] == "") $msgs [] = 'Nie podano liczby 3';
	

	if ( count($msgs)==0 ) {
		if (! is_numeric( $form['kwota'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą całkowitą';	
		if (! is_numeric( $form['lata'] )) $msgs [] = 'Druga wartość nie jest liczbą całkowitą';	

		if (! is_numeric( $form['procent'] )) {
		$msgs [] = 'Trzecia wartość nie jest liczbą';
	}
    
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
// wykonaj obliczenia
function process(&$form,&$infos, &$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	$form['kwota'] = intval($form['kwota']);
	$form['lata'] = intval($form['lata']);

	$form['procent'] = floatval($form['procent']);
	
	$result = ($form['kwota'] + $form['kwota']*($form['procent']/100)) / ($form['lata']*12);
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');