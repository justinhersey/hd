<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: modifier.remove_html.php 3455 2009-02-23 02:29:31Z auno $

function smarty_modifier_remove_html($text) {
    return strip_tags($text);
}
?>
