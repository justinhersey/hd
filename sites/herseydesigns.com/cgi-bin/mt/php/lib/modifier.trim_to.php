<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: modifier.trim_to.php 3455 2009-02-23 02:29:31Z auno $

function smarty_modifier_trim_to($text, $len) {
    $len = intval($len);
    require_once("MTUtil.php");
    if ($len < length_text($text)) {
        $text = substr_text($text, 0, $len);
    }
    return $text;
}
?>
