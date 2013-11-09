<?php
# Movable Type (r) Open Source (C) 2001-2008 Six Apart, Ltd.
# This program is distributed under the terms of the
# GNU General Public License, version 2.
#
# $Id: function.mtentrycommentcount.php 1956 2008-04-17 21:48:11Z bchoate $

function smarty_function_mtentrycommentcount($args, &$ctx) {
    $entry = $ctx->stash('entry');
    $count = $entry['entry_comment_count'];
    return $ctx->count_format($count, $args);
}
