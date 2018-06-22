<?php

/*
 * This file is part of oui_player_myspace,
 * a oui_player v2+ extension to easily embed
 * MySpace customizable video players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_player_myspace
 *
 * Copyright (C) 2018 Nicolas Morand
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA..
 */

/**
 * Myspace
 *
 * @package Oui\Player
 */

namespace Oui\Player {

    if (class_exists('Oui\Player\Provider')) {

        class Myspace extends Provider
        {
            protected static $patterns = array(
                'video' => array(
                    'scheme' => '#^(http|https)://myspace\.com/[\S]+/video/[\S]+/(\d+)$#i',
                    'id'     => '2',
                ),
            );
            protected static $src = '//media.myspace.com/';
            protected static $glue = array('play/video/', '?', '&amp;');
        }
    }
}

namespace {
    function oui_myspace($atts) {
        return oui_player(array_merge(array('provider' => 'myspace'), $atts));
    }

    function oui_if_myspace($atts, $thing) {
        return oui_if_player(array_merge(array('provider' => 'myspace'), $atts), $thing);
    }
}
