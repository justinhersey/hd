<?php
# Movable Type (r) Open Source (C) 2001-2008 Six Apart, Ltd.
# This program is distributed under the terms of the
# GNU General Public License, version 2.
#
# $Id: function.mtassetscore.php 2786 2008-07-16 02:06:07Z fumiakiy $

require_once('rating_lib.php');

function smarty_function_mtassetscore($args, &$ctx) {
    return hdlr_score($ctx, 'asset', $args['namespace'], $args['default'], $args);
}
?>
