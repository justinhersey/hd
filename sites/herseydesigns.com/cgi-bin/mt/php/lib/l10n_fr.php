<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id$

global $Lexicon_fr;
$Lexicon_fr = array(
## php/lib/function.mtwidgetmanager.php
	'Error: widgetset [_1] is empty.' => 'Erreur: le groupe de widget [_1] est vide.',
	'Error compiling widgetset [_1]' => 'Erreur de compilation du groupe de widget [_1]',

## php/lib/function.mtvar.php
	'You used a [_1] tag without a valid name attribute.' => 'Vous avez utilis�� un tag [_1] sans un attribut de nom valide',
	'\'[_1]\' is not a valid function for a hash.' => '\'[_1]\' n\'est pas une fonction valide pour un hash',
	'\'[_1]\' is not a valid function for an array.' => '\'[_1]\' n\'est pas une fonction valide pour un tableau',
	'[_1] [_2] [_3] is illegal.' => '[_1] [_2] [_3] est ill��gal.',

## php/lib/function.mtassettype.php
	'image' => 'image',
	'Image' => 'Image',
	'file' => 'fichier',
	'File' => 'Fichier',
	'audio' => 'Audio',
	'Audio' => 'Audio',
	'video' => 'Vid��o',
	'Video' => 'Vid��o',

## php/lib/thumbnail_lib.php
	'GD support has not been available. Please install GD support.' => 'Le support GP n\'est pas disponible. Veuillez installer le support GD.',

## php/lib/function.mtcommentauthor.php
	'Anonymous' => 'Anonyme',

## php/lib/MTUtil.php
	'userpic-[_1]-%wx%h%x' => 'userpic-[_1]-%wx%h%x',

## php/lib/archive_lib.php
	'Page' => 'Page',
	'Individual' => 'Individuel',
	'Yearly' => 'Annuelles',
	'Monthly' => 'Mensuelles',
	'Daily' => 'Journali��res',
	'Weekly' => 'Hebdomadaires',
	'Author' => 'Par auteurs',
	'(Display Name not set)' => '(Nom pas sp��cifi��)',
	'Author Yearly' => 'Par auteurs et ann��es',
	'Author Monthly' => 'Par auteurs et mois',
	'Author Daily' => 'Par auteurs et jours',
	'Author Weekly' => 'Par auteurs et semaines',
	'Category Yearly' => 'Par cat��gories et ann��es',
	'Category Monthly' => 'Par cat��gories et mois',
	'Category Daily' => 'Par cat��gories et jours',
	'Category Weekly' => 'Par cat��gories et semaines',

## php/lib/block.mtif.php

## php/lib/function.mtremotesigninlink.php
	'TypePad authentication is not enabled in this blog.  MTRemoteSignInLink can\'t be used.' => 'L\'authentification TypePad n\'est pas activ��e sur ce blog. MTRemoteSignInLink ne peut ��tre utilis��.',

## php/lib/block.mtauthorhaspage.php
	'No author available' => 'Il n\'a pas d\'auteurs disponibles',

## php/lib/block.mtsethashvar.php

## php/lib/block.mtauthorhasentry.php

## php/lib/function.mtproductname.php
	'[_1] [_2]' => '[_1] [_2]',

## php/lib/function.mtcommentauthorlink.php

## php/lib/captcha_lib.php
	'Captcha' => 'Captcha',
	'Type the characters you see in the picture above.' => 'Saisissez les caract��res que vous voyez dans l\'image ci-dessus.',

## php/lib/function.mtsetvar.php
	'\'[_1]\' is not a hash.' => '\'[_1]\' n\'est pas un hash',
	'Invalid index.' => 'Index invalide',
	'\'[_1]\' is not an array.' => '\'[_1]\' n\'est pas un tableau',
	'\'[_1]\' is not a valid function.' => '\'[_1]\' n\'est pas une fonction valide',

## php/lib/block.mtassets.php
	'sort_by="score" must be used in combination with namespace.' => 'sort_by="score" doit ��tre utilis�� en combinaison avec l\'espace de nom.',

## php/lib/block.mtsetvarblock.php

## php/lib/block.mtentries.php

## php/lib/function.mtauthordisplayname.php

## php/lib/function.mtentryclasslabel.php
	'page' => 'Page',
	'entry' => 'note',
	'Entry' => 'Note',

## php/lib/function.mtcommentreplytolink.php
	'Reply' => 'R��pondre',

## php/mt.php.pre
	'Page not found - [_1]' => 'Page non trouv��e - [_1]',
);
function translate_phrase($str, $params = null) {
    global $Lexicon, $Lexicon_fr;
    $l10n_str = isset($Lexicon_fr[$str]) ? $Lexicon_fr[$str] : (isset($Lexicon[$str]) ? $Lexicon[$str] : $str);
    if (extension_loaded('mbstring')) {
        $str = mb_convert_encoding($l10n_str,mb_internal_encoding(),"UTF-8");
    } else {
        $str = $l10n_str;
    }
    return translate_phrase_param($str, $params);
}
?>
