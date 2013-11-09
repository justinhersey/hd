<?php
# Movable Type (r) (C) 2001-2009 Six Apart, Ltd. All Rights Reserved.
# This program is distributed under the terms of the
# GNU General Public License, version 2.
#
# $Id: init.community.php 98706 2009-02-23 02:57:44Z auno $

global $mt;

if ( isset( $mt->db ) )
    array_push( $mt->db->object_meta['blog'], 'allow_anon_recommend:vinteger' );
?>
