<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: function.mtcommentauthor.php 3455 2009-02-23 02:29:31Z auno $

function smarty_function_mtcommentauthor($args, &$ctx) {
    $c = $ctx->stash('comment');
    if (!$c)
        return $ctx->error("No comment available");
    $a = isset($c['comment_author']) ? $c['comment_author'] : '';
    if ($c['comment_commenter_id']) {
        $commenter = $ctx->stash('commenter');
        if ($commenter)
            $a = $commenter['author_nickname'];
    }
    if (isset($args['default']))
        $a or $a = $args['default'];
    else {
        global $mt;
        $a or $a = $mt->translate("Anonymous");
    }
    $a or $a = '';
    return strip_tags($a);
}
