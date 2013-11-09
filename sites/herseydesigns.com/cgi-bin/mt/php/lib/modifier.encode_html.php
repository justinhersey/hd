<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: modifier.encode_html.php 3455 2009-02-23 02:29:31Z auno $

function smarty_modifier_encode_html($text) {
    if (version_compare(phpversion(), '4.3.0', '>=')) {
        global $mt;
        $charset = $mt->config('PublishCharset');
        return htmlentities($text, ENT_COMPAT, $charset);
    } else {
        return htmlentities($text, ENT_COMPAT);
    }
}
?>
