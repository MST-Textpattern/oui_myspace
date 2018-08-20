<?php

/*
 * This file is part of oui_myspace,
 * a oui_player v2+ extension to easily embed
 * MySpace customizable video players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_myspace
 *
 * Copyright (C) 2018 Nicolas Morand
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
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

namespace Oui;

if (class_exists('Oui\Player\Provider')) {

    class Myspace extends Player\Provider
    {
        protected static $srcBase = '//media.myspace.com/';
        protected static $srcGlue = array('play/video/', '?', '&amp;');
        protected static $iniDims = array(
            'width'      => '480',
            'height'     => '270',
            'ratio'      => '',
            'responsive' => array(
                'default' => 'false',
                'valid'   => array('true', 'false'),
            ),
        );
        protected static $mediaPatterns = array(
            'scheme' => '#^https?://myspace\.com/[\S]+/video/[\S]+/(\d+)$#i',
            'id'     => '1',
        );
    }
}
