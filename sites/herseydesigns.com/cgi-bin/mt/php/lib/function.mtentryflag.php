<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: function.mtentryflag.php 3455 2009-02-23 02:29:31Z auno $

function smarty_function_mtentryflag($args, &$ctx) {
    $entry = $ctx->stash('entry');
    $flag = 'entry_' . $args['flag'];
    if (isset($entry[$flag])) {
        $v = $entry[$flag];
    }
    if ($flag == 'allow_pings') {
       return isset($v) ? $v : 0; 
    } else {
       return isset($v) ? $v : 1;
    }
}
?>
