<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: function.mtcommentscoreavg.php 3455 2009-02-23 02:29:31Z auno $

require_once('rating_lib.php');

function smarty_function_mtcommentscoreavg($args, &$ctx) {
    return hdlr_score_avg($ctx, 'comment', $args['namespace'], $args);
}
?>
