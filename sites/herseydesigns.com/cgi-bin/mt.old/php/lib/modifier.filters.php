<?php
# Movable Type (r) Open Source (C) 2001-2008 Six Apart, Ltd.
# This program is distributed under the terms of the
# GNU General Public License, version 2.
#
# $Id: modifier.filters.php 2587 2008-06-17 04:13:08Z takayama $

function smarty_modifier_filters($text,$filters) {
    // status: complete
    global $mt;
    $ctx =& $mt->context();
    require_once 'MTUtil.php';
    $text = apply_text_filter($ctx, $text, $filters);

    return $text;
}
?>
