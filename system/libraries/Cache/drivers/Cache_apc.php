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
 * @since	Version 2.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter APC Caching Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Core
 * @author		EllisLab Dev Team
 * @link
 */
class CI_Cache_apc extends CI_Driver {

	/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	 * Class constructor
	 *
	 * Only present so that an error message is logged
	 * if APC is not available.
	 *
	 * @return	void
	 */
	public function __construct()
	{
		if ( ! $this->is_supported())
		{
			log_message('error', 'Cache: Failed to initialize APC; extension not loaded/enabled?');
		}
	}

	// ------------------------------------------------------------------------

	/**
<<<<<<< HEAD
=======
=======
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	 * Get
	 *
	 * Look for a value in the cache. If it exists, return the data
	 * if not, return FALSE
	 *
	 * @param	string
	 * @return	mixed	value that is stored/FALSE on failure
	 */
	public function get($id)
	{
		$success = FALSE;
		$data = apc_fetch($id, $success);

		if ($success === TRUE)
		{
			return is_array($data)
				? unserialize($data[0])
				: $data;
		}

		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Cache Save
	 *
	 * @param	string	$id	Cache ID
	 * @param	mixed	$data	Data to store
<<<<<<< HEAD
	 * @param	int	$ttl	Length of time (in seconds) to cache the data
=======
<<<<<<< HEAD
	 * @param	int	$ttl	Length of time (in seconds) to cache the data
=======
	 * @param	int	$ttol	Length of time (in seconds) to cache the data
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	 * @param	bool	$raw	Whether to store the raw value
	 * @return	bool	TRUE on success, FALSE on failure
	 */
	public function save($id, $data, $ttl = 60, $raw = FALSE)
	{
		$ttl = (int) $ttl;

		return apc_store(
			$id,
			($raw === TRUE ? $data : array(serialize($data), time(), $ttl)),
			$ttl
		);
	}

	// ------------------------------------------------------------------------

	/**
	 * Delete from Cache
	 *
	 * @param	mixed	unique identifier of the item in the cache
	 * @return	bool	true on success/false on failure
	 */
	public function delete($id)
	{
		return apc_delete($id);
	}

	// ------------------------------------------------------------------------

	/**
	 * Increment a raw value
	 *
	 * @param	string	$id	Cache ID
	 * @param	int	$offset	Step/value to add
	 * @return	mixed	New value on success or FALSE on failure
	 */
	public function increment($id, $offset = 1)
	{
		return apc_inc($id, $offset);
	}

	// ------------------------------------------------------------------------

	/**
	 * Decrement a raw value
	 *
	 * @param	string	$id	Cache ID
	 * @param	int	$offset	Step/value to reduce by
	 * @return	mixed	New value on success or FALSE on failure
	 */
	public function decrement($id, $offset = 1)
	{
		return apc_dec($id, $offset);
	}

	// ------------------------------------------------------------------------

	/**
	 * Clean the cache
	 *
	 * @return	bool	false on failure/true on success
	 */
	public function clean()
	{
		return apc_clear_cache('user');
	}

	// ------------------------------------------------------------------------

	/**
	 * Cache Info
	 *
	 * @param	string	user/filehits
	 * @return	mixed	array on success, false on failure
	 */
	 public function cache_info($type = NULL)
	 {
		 return apc_cache_info($type);
	 }

	// ------------------------------------------------------------------------

	/**
	 * Get Cache Metadata
	 *
	 * @param	mixed	key to get cache metadata on
	 * @return	mixed	array on success/false on failure
	 */
	public function get_metadata($id)
	{
		$success = FALSE;
		$stored = apc_fetch($id, $success);

		if ($success === FALSE OR count($stored) !== 3)
		{
			return FALSE;
		}

		list($data, $time, $ttl) = $stored;

		return array(
			'expire'	=> $time + $ttl,
			'mtime'		=> $time,
			'data'		=> unserialize($data)
		);
	}

	// ------------------------------------------------------------------------

	/**
	 * is_supported()
	 *
	 * Check to see if APC is available on this system, bail if it isn't.
	 *
	 * @return	bool
	 */
	public function is_supported()
	{
<<<<<<< HEAD
		return (extension_loaded('apc') && ini_get('apc.enabled'));
	}
=======
<<<<<<< HEAD
		return (extension_loaded('apc') && ini_get('apc.enabled'));
	}
=======
		if ( ! extension_loaded('apc') OR ! ini_get('apc.enabled'))
		{
			log_message('debug', 'The APC PHP extension must be loaded to use APC Cache.');
			return FALSE;
		}

		return TRUE;
	}

>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
}
