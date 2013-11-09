<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This program is distributed under the terms of the
# GNU General Public License, version 2.
#
# $Id$

function smarty_modifier___sanitize__($text) {
    require_once("modifier.sanitize.php");
    return smarty_modifier_sanitize($text, '1');
}
