<?php
# Movable Type (r) Open Source (C) 2001-2008 Six Apart, Ltd.
# This program is distributed under the terms of the
# GNU General Public License, version 2.
#
# $Id$

global $Lexicon_ja;
$Lexicon_ja = array(

## php/mt.php
	'Page not found - [_1]' => '[_1]���˶�ŧ�������������ߓ�������',

## php/lib/archive_lib.php
	'Page' => '�Ƕ��ߓ�����ɺ�ǽ',
	'Individual' => '���ɂ�ǃˮ��',
	'Yearly' => '¼����',
	'Monthly' => '������',
	'Daily' => '�����',
	'Weekly' => '�ı���',
	'Author' => '�ɶ�ɺ�Ǐ�ɺ',
	'(Display Name not set)' => '(˰�������Ł���)',
	'Author Yearly' => '�ɶ�ɺ�Ǐ�ɺ ¼����',
	'Author Monthly' => '�ɶ�ɺ�Ǐ�ɺ ������',
	'Author Daily' => '�ɶ�ɺ�Ǐ�ɺ �����',
	'Author Weekly' => '�ɶ�ɺ�Ǐ�ɺ �ı���',
	'Category Yearly' => '�Ǵ��ܓǥ�Ɂ ¼����',
	'Category Monthly' => '�Ǵ��ܓǥ�Ɂ ������',
	'Category Daily' => '�Ǵ��ܓǥ�Ɂ �����',
	'Category Weekly' => '�Ǵ��ܓǥ�Ɂ �ı���',

## php/lib/function.mtsetvar.php
	'You used a [_1] tag without a valid name attribute.' => '[_1]����ǃ��ߓ��name±���ߓ����������ߓ�����',
	'\'[_1]\' is not a hash.' => '[_1]��ؓ���ɓǅ�ɀ��ߓ�ؓ�Ǔ�����������',
	'Invalid index.' => '���ʂ��Ł�ǧ�Ʉ����ɓ�ؓǼ��ߓ�����',
	'\'[_1]\' is not an array.' => '[_1]����������ߓ�ؓ�Ǔ�����������',
	'[_1] [_2] [_3] is illegal.' => '[_1] [_2] [_3]��ؔ��ʂ���ߓ�����',
	'\'[_1]\' is not a valid function.' => '[_1]�Ů��ѓ������ؓǵ����ɺ��������Ŷ��ѓ���������',

## php/lib/function.mtproductname.php
	'[_1] [_2]' => '[_1] [_2]',

## php/lib/function.mtcommentauthor.php
	'Anonymous' => '������',

## php/lib/block.mtsetvarblock.php

## php/lib/block.mtsethashvar.php

## php/lib/function.mtcommentauthorlink.php

## php/lib/function.mtvar.php
	'\'[_1]\' is not a valid function for a hash.' => '[_1]��ؓ���ɓǅ�ɀ�������ߓ��������ߓ�ؓ�Ǔ�����������',
	'\'[_1]\' is not a valid function for an array.' => '[_1]���������������ߓ��������ߓ�ؓ�Ǔ�����������',

## php/lib/function.mtwidgetmanager.php
	'Error: widgetset [_1] is empty.' => '�Ƕ�ǣ�ǽ��ߓ�ɓ���Ǫ��ɓ��[_1]�Ŵ���ˆ�����Ǔ�����������',
	'Error compiling widgetset [_1]' => '�Ƕ�ǣ�ǽ��ߓ�ɓ���Ǫ��ɓ��[_1]���Ǆ�Ʉ���ǧ�ɴ��ߓ����������ߓ�������',

## php/lib/block.mtauthorhaspage.php
	'No author available' => '�ɶ�ɺ�Ǐ�ɺ���˶�ŧ��������������',

## php/lib/block.mtentries.php
	'sort_by="score" must be used in combination with namespace.' => 'sort_by="score"���������������Ů�����namespace������������Ł�����Ń�Ł������������',

## php/lib/block.mtif.php

## php/lib/block.mtassets.php

## php/lib/thumbnail_lib.php
	'GD support has not been available. Please install GD support.' => 'GD�������ߓ��Ł��ѓ����ܓ�ߓ����Ǔǧ�Ʉ�Ǽ����ɺ�ɴ���Ŷ����ݓ���ѓ��',

## php/lib/function.mtentryclasslabel.php
	'page' => '�Ƕ��ߓ�����ɺ�ǽ',
	'entry' => '���ɂ�ǃˮ��',
	'Entry' => '���ɂ�ǃˮ��',

## php/lib/MTUtil.php
	'userpic-[_1]-%wx%h%x' => 'userpic-[_1]-%wx%h%x',

## php/lib/function.mtauthordisplayname.php

## php/lib/function.mtremotesigninlink.php
	'TypeKey authentication is not enabled in this blog.  MTRemoteSignInLink can\'t be used.' => '���ɂ�ǃ���TypeKeyˁ�ˮ��������伓Ŵ���Ŷ��ѓŁ��ѓ�Ɠ�ߓ��MTRemoteSignInLink�������ߓ�����������',

## php/lib/captcha_lib.php
	'Captcha' => 'Captcha',
	'Type the characters you see in the picture above.' => '������Ɣ���Ŵ˶�������������ր������Ŷ����ݓ���ѓ��',

## php/lib/function.mtassettype.php
	'image' => '�����',
	'Image' => '�����',
	'file' => '���ǰ�ǧ�ɴ',
	'File' => '���ǰ�ǧ�ɴ',
	'audio' => '�ǁ�ɺ���ǣ�ǁ',
	'Audio' => '�ǁ�ɺ���ǣ�ǁ',
	'video' => '�����ǁ',
	'Video' => '�����ǁ',

## php/lib/block.mtauthorhasentry.php

## php/lib/function.mtcommentreplytolink.php
	'Reply' => '�����',

## php/mt.php.pre
);
function translate_phrase($str, $params = null) {
    global $Lexicon, $Lexicon_ja;
    $l10n_str = isset($Lexicon_ja[$str]) ? $Lexicon_ja[$str] : (isset($Lexicon[$str]) ? $Lexicon[$str] : $str);
    if (extension_loaded('mbstring')) {
        $str = mb_convert_encoding($l10n_str,mb_internal_encoding(),"UTF-8");
    } else {
        $str = $l10n_str;
    }
    return translate_phrase_param($str, $params);
}
?>
