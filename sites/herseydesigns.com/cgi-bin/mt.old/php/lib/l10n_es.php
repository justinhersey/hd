<?php
# Movable Type (r) Open Source (C) 2001-2008 Six Apart, Ltd.
# This program is distributed under the terms of the
# GNU General Public License, version 2.
#
# $Id$

global $Lexicon_es;
$Lexicon_es = array(
## php/lib/function.mtassettype.php
	'image' => 'Imagen',
	'Image' => 'Imagen',
	'file' => 'fichero',
	'File' => 'Fichero',
	'audio' => 'Audio',
	'Audio' => 'Audio',
	'video' => 'V��deo',
	'Video' => 'V��deo',

## php/lib/function.mtvar.php
	'You used a [_1] tag without a valid name attribute.' => 'Us�� la etiqueta [_1] sin un nombre de atributo v��lido.',
	'\'[_1]\' is not a valid function for a hash.' => '\'[_1]\' no es una funci��n v��lida para un hash.',
	'\'[_1]\' is not a valid function for an array.' => '\'[_1]\' no es una funci��n v��lida para un array.',
	'[_1] [_2] [_3] is illegal.' => '[_1] [_2] [_3] es ilegal.',

## php/lib/function.mtwidgetmanager.php
	'Error: widgetset [_1] is empty.' => 'Error: el conjunto de widgets [_1] est�� vac��o',
	'Error compiling widgetset [_1]' => 'Error compilando el conjunto de widgets [_1]',

## php/lib/thumbnail_lib.php
	'GD support has not been available. Please install GD support.' => 'No tiene soporte de GD. Por favor, instale GD.', # Translate - New

## php/lib/function.mtcommentauthor.php
	'Anonymous' => 'An��nimo',

## php/lib/archive_lib.php
	'Page' => 'P��gina',
	'Individual' => 'Inidivual',
	'Yearly' => 'Anuales',
	'Monthly' => 'Mensuales',
	'Daily' => 'Diarias',
	'Weekly' => 'Semanales',
	'Author' => 'Por Autor',
	'(Display Name not set)' => '(Nombre no configurado)',
	'Author Yearly' => 'Anuales del autor',
	'Author Monthly' => 'Mensuales del autor',
	'Author Daily' => 'Diarios del autor',
	'Author Weekly' => 'Semanales del autor',
	'Category Yearly' => 'Categor��as anuales',
	'Category Monthly' => 'Categor��as mensuales',
	'Category Daily' => 'Categor��as diarias',
	'Category Weekly' => 'Categor��as semanales',

## php/lib/block.mtsethashvar.php

## php/lib/block.mtif.php

## php/lib/function.mtremotesigninlink.php
	'TypeKey authentication is not enabled in this blog.  MTRemoteSignInLink can\'t be used.' => 'La autentificaci��n en TypeKey no est�� habilitada en este blog. No se puede usar MTRemoteSignInLink.',

## php/lib/block.mtauthorhaspage.php
	'No author available' => 'Ning��n autor disponible',

## php/lib/block.mtauthorhasentry.php

## php/lib/function.mtproductname.php
	'[_1] [_2]' => '[_1] [_2]',

## php/lib/captcha_lib.php
	'Captcha' => 'Captcha',
	'Type the characters you see in the picture above.' => 'Introduzca los caracteres que ve en la imagen de arriba.',

## php/lib/function.mtcommentauthorlink.php

## php/lib/MTUtil.php
	'userpic-[_1]-%wx%h%x' => 'avatar-[_1]-%wx%h%x',

## php/lib/function.mtsetvar.php
	'\'[_1]\' is not a hash.' => '\'[_1]\' no es un hash.',
	'Invalid index.' => '��ndice no v��lido.',
	'\'[_1]\' is not an array.' => '\'[_1]\' no es un array.',
	'\'[_1]\' is not a valid function.' => '\'[_1]\' no es una funci��n v��lida.',

## php/lib/block.mtassets.php
	'sort_by="score" must be used in combination with namespace.' => 'sort_by="score" debe usarse en combinaci��n con el espacio de nombres.',

## php/lib/block.mtsetvarblock.php

## php/lib/block.mtentries.php

## php/lib/function.mtauthordisplayname.php

## php/lib/function.mtcommentreplytolink.php
	'Reply' => 'Responder',

## php/lib/function.mtentryclasslabel.php
	'page' => 'p��gina',
	'entry' => 'entrada',
	'Entry' => 'Entrada',

## php/mt.php.pre
	'Page not found - [_1]' => 'P��gina no encontrada - [_1]',
);
function translate_phrase($str, $params = null) {
    global $Lexicon, $Lexicon_es;
    $l10n_str = isset($Lexicon_es[$str]) ? $Lexicon_es[$str] : (isset($Lexicon[$str]) ? $Lexicon[$str] : $str);
    if (extension_loaded('mbstring')) {
        $str = mb_convert_encoding($l10n_str,mb_internal_encoding(),"UTF-8");
    } else {
        $str = $l10n_str;
    }
    return translate_phrase_param($str, $params);
}
?>
