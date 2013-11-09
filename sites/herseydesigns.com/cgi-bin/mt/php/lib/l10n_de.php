<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id$

global $Lexicon_de;
$Lexicon_de = array(
## php/lib/function.mtwidgetmanager.php
	'Error: widgetset [_1] is empty.' => 'Fehler: Die Widgetgruppe \'[_1]\' ist leer.',
	'Error compiling widgetset [_1]' => 'Fehler bei Kompilierung der Widgetgruppe \'[_1]\'',

## php/lib/function.mtvar.php
	'You used a [_1] tag without a valid name attribute.' => '\'[_1]\'-Befehl ohne gˆºltiges Namensattribut verwendet.',
	'\'[_1]\' is not a valid function for a hash.' => '\'[_1]\' ist keine gˆºltige Hash-Funktion.',
	'\'[_1]\' is not a valid function for an array.' => '\'[_1]\' ist keine gˆºltige Array-Funktion.',
	'[_1] [_2] [_3] is illegal.' => '[_1] [_2] [_3] ist ungˆºltig.',

## php/lib/function.mtassettype.php
	'image' => 'Bild',
	'Image' => 'Bild',
	'file' => 'Datei',
	'File' => 'Datei',
	'audio' => 'Tˆne',
	'Audio' => 'Tˆne',
	'video' => 'Video',
	'Video' => 'Video',

## php/lib/thumbnail_lib.php
	'GD support has not been available. Please install GD support.' => 'Keine GD-Unterstˆºtzung vorhanden. Bitte installieren Sie die GD-Bibliothek.',

## php/lib/function.mtcommentauthor.php
	'Anonymous' => 'Anonym',

## php/lib/MTUtil.php
	'userpic-[_1]-%wx%h%x' => 'userpic-[_1]-%wx%h%x',

## php/lib/archive_lib.php
	'Page' => 'Seite',
	'Individual' => 'Individuell',
	'Yearly' => 'Jˆ§hrlich',
	'Monthly' => 'Monatlich',
	'Daily' => 'Tˆ§glich',
	'Weekly' => 'Wˆchentlich',
	'Author' => 'Autor',
	'(Display Name not set)' => '(Kein Anzeigename gewˆ§hlt)',
	'Author Yearly' => 'Autor jˆ§hrlich',
	'Author Monthly' => 'Autor monatlich',
	'Author Daily' => 'Autor tˆ§glich',
	'Author Weekly' => 'Autor wˆchentlich',
	'Category Yearly' => 'Kategorie jˆ§hrlich',
	'Category Monthly' => 'Kategorie monatlich',
	'Category Daily' => 'Kategorie tˆ§glich',
	'Category Weekly' => 'Kategorie wˆchentlich',

## php/lib/block.mtif.php

## php/lib/function.mtremotesigninlink.php
	'TypePad authentication is not enabled in this blog.  MTRemoteSignInLink can\'t be used.' => 'TypePad-Authentifizierung ist fˆºr dieses Blog nicht aktiviert. MTremoteSignInLink kann daher nicht verwendet werden.',

## php/lib/block.mtauthorhaspage.php
	'No author available' => 'Kein Autor verfˆºgbar',

## php/lib/block.mtsethashvar.php

## php/lib/block.mtauthorhasentry.php

## php/lib/function.mtproductname.php
	'[_1] [_2]' => '[_1] [_2]',

## php/lib/function.mtcommentauthorlink.php

## php/lib/captcha_lib.php
	'Captcha' => 'Captcha',
	'Type the characters you see in the picture above.' => 'Geben Sie die Zeichen ein, die Sie im obigen Bild sehen.',

## php/lib/function.mtsetvar.php
	'\'[_1]\' is not a hash.' => '\'[_1]\' ist kein Hash.',
	'Invalid index.' => 'Index ungˆºltig.',
	'\'[_1]\' is not an array.' => '\'[_1]\' ist kein Array.',
	'\'[_1]\' is not a valid function.' => '\'[_1]\' ist keine gˆºltige Funktion.',

## php/lib/block.mtassets.php
	'sort_by="score" must be used in combination with namespace.' => 'Sort_by="score" erfordert einen Namespace.',

## php/lib/block.mtsetvarblock.php

## php/lib/block.mtentries.php

## php/lib/function.mtauthordisplayname.php

## php/lib/function.mtentryclasslabel.php
	'page' => 'Seite',
	'entry' => 'Eintrag',
	'Entry' => 'Eintrag',

## php/lib/function.mtcommentreplytolink.php
	'Reply' => 'Antworten',

## php/mt.php.pre
	'Page not found - [_1]' => 'Seite nicht gefunden - [_1]',
);
function translate_phrase($str, $params = null) {
    global $Lexicon, $Lexicon_de;
    $l10n_str = isset($Lexicon_de[$str]) ? $Lexicon_de[$str] : (isset($Lexicon[$str]) ? $Lexicon[$str] : $str);
    if (extension_loaded('mbstring')) {
        $str = mb_convert_encoding($l10n_str,mb_internal_encoding(),"UTF-8");
    } else {
        $str = $l10n_str;
    }
    return translate_phrase_param($str, $params);
}
?>
