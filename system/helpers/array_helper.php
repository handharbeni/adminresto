<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
<<<<<<< HEAD
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
=======
<<<<<<< HEAD
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
=======
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
<<<<<<< HEAD
=======
=======
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Array Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
<<<<<<< HEAD
 * @link		https://codeigniter.com/user_guide/helpers/array_helper.html
=======
<<<<<<< HEAD
 * @link		https://codeigniter.com/user_guide/helpers/array_helper.html
=======
 * @link		http://codeigniter.com/user_guide/helpers/array_helper.html
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
 */

// ------------------------------------------------------------------------

if ( ! function_exists('element'))
{
	/**
	 * Element
	 *
	 * Lets you determine whether an array index is set and whether it has a value.
	 * If the element is empty it returns NULL (or whatever you specify as the default value.)
	 *
	 * @param	string
	 * @param	array
	 * @param	mixed
	 * @return	mixed	depends on what the array contains
	 */
<<<<<<< HEAD
	function element($item, array $array, $default = NULL)
=======
<<<<<<< HEAD
	function element($item, array $array, $default = NULL)
=======
	function element($item, $array, $default = NULL)
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	{
		return array_key_exists($item, $array) ? $array[$item] : $default;
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('random_element'))
{
	/**
	 * Random Element - Takes an array as input and returns a random element
	 *
	 * @param	array
	 * @return	mixed	depends on what the array contains
	 */
	function random_element($array)
	{
		return is_array($array) ? $array[array_rand($array)] : $array;
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('elements'))
{
	/**
	 * Elements
	 *
	 * Returns only the array items specified. Will return a default value if
	 * it is not set.
	 *
	 * @param	array
	 * @param	array
	 * @param	mixed
	 * @return	mixed	depends on what the array contains
	 */
<<<<<<< HEAD
	function elements($items, array $array, $default = NULL)
=======
<<<<<<< HEAD
	function elements($items, array $array, $default = NULL)
=======
	function elements($items, $array, $default = NULL)
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	{
		$return = array();

		is_array($items) OR $items = array($items);

		foreach ($items as $item)
		{
			$return[$item] = array_key_exists($item, $array) ? $array[$item] : $default;
		}

		return $return;
	}
}
