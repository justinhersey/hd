<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: function.mtdate.php 3455 2009-02-23 02:29:31Z auno $

function smarty_function_mtdate($args, &$ctx) {
    require_once("MTUtil.php");
    $t = time();
    $ts = offset_time_list($t, $ctx->stash('blog'));
    $args['ts'] = sprintf("%04d%02d%02d%02d%02d%02d",
        $ts[5]+1900, $ts[4]+1, $ts[3], $ts[2], $ts[1], $ts[0]);
    return $ctx->_hdlr_date($args, $ctx);
}
?>
