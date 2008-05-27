<?php

/**
 * Indents every line of a text by the given amount of characters
 * 
 *  * value : the string to indent
 *  * by : how many characters should be inserted before each line
 *  * char : the character(s) to insert
 *
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * This file is released under the LGPL
 * "GNU Lesser General Public License"
 * More information can be found here:
 * {@link http://www.gnu.org/copyleft/lesser.html}
 *
 * @author     Jordi Boggiano <j.boggiano@seld.be>
 * @copyright  Copyright (c) 2008, Jordi Boggiano
 * @license    http://www.gnu.org/copyleft/lesser.html  GNU Lesser General Public License
 * @link       http://dwoo.org/
 * @version    0.9.0
 * @date       2008-05-10
 * @package    Dwoo
 */
function Dwoo_Plugin_indent_compile(Dwoo_Compiler $compiler, $value, $by=4, $char=' ')
{
	return "preg_replace('#^#m', '".str_repeat(substr($char, 1, -1), trim($by, '"\''))."', $value)";
}
