<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: function.mtusersessioncookietimeout.php 3455 2009-02-23 02:29:31Z auno $

function smarty_function_mtusersessioncookietimeout($args, &$ctx) {
    return $ctx->mt->config('UserSessionCookieTimeout');
}
