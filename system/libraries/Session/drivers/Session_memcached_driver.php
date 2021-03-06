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
 * @since	Version 3.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Session Memcached Driver
 *
 * @package	CodeIgniter
 * @subpackage	Libraries
 * @category	Sessions
 * @author	Andrey Andreev
<<<<<<< HEAD
 * @link	https://codeigniter.com/user_guide/libraries/sessions.html
=======
<<<<<<< HEAD
 * @link	https://codeigniter.com/user_guide/libraries/sessions.html
=======
 * @link	http://codeigniter.com/user_guide/libraries/sessions.html
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
 */
class CI_Session_memcached_driver extends CI_Session_driver implements SessionHandlerInterface {

	/**
	 * Memcached instance
	 *
	 * @var	Memcached
	 */
	protected $_memcached;

	/**
	 * Key prefix
	 *
	 * @var	string
	 */
	protected $_key_prefix = 'ci_session:';

	/**
	 * Lock key
	 *
	 * @var	string
	 */
	protected $_lock_key;

	// ------------------------------------------------------------------------

	/**
	 * Class constructor
	 *
	 * @param	array	$params	Configuration parameters
	 * @return	void
	 */
	public function __construct(&$params)
	{
		parent::__construct($params);

		if (empty($this->_config['save_path']))
		{
			log_message('error', 'Session: No Memcached save path configured.');
		}

		if ($this->_config['match_ip'] === TRUE)
		{
			$this->_key_prefix .= $_SERVER['REMOTE_ADDR'].':';
		}
	}

	// ------------------------------------------------------------------------

	/**
	 * Open
	 *
	 * Sanitizes save_path and initializes connections.
	 *
	 * @param	string	$save_path	Server path(s)
	 * @param	string	$name		Session cookie name, unused
	 * @return	bool
	 */
	public function open($save_path, $name)
	{
		$this->_memcached = new Memcached();
		$this->_memcached->setOption(Memcached::OPT_BINARY_PROTOCOL, TRUE); // required for touch() usage
		$server_list = array();
		foreach ($this->_memcached->getServerList() as $server)
		{
			$server_list[] = $server['host'].':'.$server['port'];
		}

		if ( ! preg_match_all('#,?([^,:]+)\:(\d{1,5})(?:\:(\d+))?#', $this->_config['save_path'], $matches, PREG_SET_ORDER))
		{
			$this->_memcached = NULL;
			log_message('error', 'Session: Invalid Memcached save path format: '.$this->_config['save_path']);
<<<<<<< HEAD
			return $this->_fail();
=======
<<<<<<< HEAD
			return $this->_fail();
=======
			return FALSE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
		}

		foreach ($matches as $match)
		{
			// If Memcached already has this server (or if the port is invalid), skip it
			if (in_array($match[1].':'.$match[2], $server_list, TRUE))
			{
				log_message('debug', 'Session: Memcached server pool already has '.$match[1].':'.$match[2]);
				continue;
			}

			if ( ! $this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0))
			{
				log_message('error', 'Could not add '.$match[1].':'.$match[2].' to Memcached server pool.');
			}
			else
			{
				$server_list[] = $match[1].':'.$match[2];
			}
		}

		if (empty($server_list))
		{
			log_message('error', 'Session: Memcached server pool is empty.');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
			return $this->_fail();
		}

		return $this->_success;
<<<<<<< HEAD
=======
=======
			return FALSE;
		}

		return TRUE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	}

	// ------------------------------------------------------------------------

	/**
	 * Read
	 *
	 * Reads session data and acquires a lock
	 *
	 * @param	string	$session_id	Session ID
	 * @return	string	Serialized session data
	 */
	public function read($session_id)
	{
		if (isset($this->_memcached) && $this->_get_lock($session_id))
		{
			// Needed by write() to detect session_regenerate_id() calls
			$this->_session_id = $session_id;

			$session_data = (string) $this->_memcached->get($this->_key_prefix.$session_id);
			$this->_fingerprint = md5($session_data);
			return $session_data;
		}

<<<<<<< HEAD
		return $this->_fail();
=======
<<<<<<< HEAD
		return $this->_fail();
=======
		return FALSE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	}

	// ------------------------------------------------------------------------

	/**
	 * Write
	 *
	 * Writes (create / update) session data
	 *
	 * @param	string	$session_id	Session ID
	 * @param	string	$session_data	Serialized session data
	 * @return	bool
	 */
	public function write($session_id, $session_data)
	{
<<<<<<< HEAD
		if ( ! isset($this->_memcached, $this->_lock_key))
		{
			return $this->_fail();
=======
<<<<<<< HEAD
		if ( ! isset($this->_memcached, $this->_lock_key))
		{
			return $this->_fail();
=======
		if ( ! isset($this->_memcached))
		{
			return FALSE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
		}
		// Was the ID regenerated?
		elseif ($session_id !== $this->_session_id)
		{
			if ( ! $this->_release_lock() OR ! $this->_get_lock($session_id))
			{
<<<<<<< HEAD
				return $this->_fail();
=======
<<<<<<< HEAD
				return $this->_fail();
=======
				return FALSE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
			}

			$this->_fingerprint = md5('');
			$this->_session_id = $session_id;
		}

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
		$key = $this->_key_prefix.$session_id;

		$this->_memcached->replace($this->_lock_key, time(), 300);
		if ($this->_fingerprint !== ($fingerprint = md5($session_data)))
		{
			if ($this->_memcached->set($key, $session_data, $this->_config['expiration']))
			{
				$this->_fingerprint = $fingerprint;
				return $this->_success;
			}

			return $this->_fail();
		}
		elseif (
			$this->_memcached->touch($key, $this->_config['expiration'])
			OR ($this->_memcached->getResultCode() === Memcached::RES_NOTFOUND && $this->_memcached->set($key, $session_data, $this->_config['expiration']))
		)
		{
			return $this->_success;
		}

		return $this->_fail();
<<<<<<< HEAD
=======
=======
		if (isset($this->_lock_key))
		{
			$this->_memcached->replace($this->_lock_key, time(), 300);
			if ($this->_fingerprint !== ($fingerprint = md5($session_data)))
			{
				if ($this->_memcached->set($this->_key_prefix.$session_id, $session_data, $this->_config['expiration']))
				{
					$this->_fingerprint = $fingerprint;
					return TRUE;
				}

				return FALSE;
			}

			return $this->_memcached->touch($this->_key_prefix.$session_id, $this->_config['expiration']);
		}

		return FALSE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	}

	// ------------------------------------------------------------------------

	/**
	 * Close
	 *
	 * Releases locks and closes connection.
	 *
	 * @return	bool
	 */
	public function close()
	{
		if (isset($this->_memcached))
		{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
			$this->_release_lock();
			if ( ! $this->_memcached->quit())
			{
				return $this->_fail();
			}

			$this->_memcached = NULL;
			return $this->_success;
		}

		return $this->_fail();
<<<<<<< HEAD
=======
=======
			isset($this->_lock_key) && $this->_memcached->delete($this->_lock_key);
			if ( ! $this->_memcached->quit())
			{
				return FALSE;
			}

			$this->_memcached = NULL;
			return TRUE;
		}

		return FALSE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	}

	// ------------------------------------------------------------------------

	/**
	 * Destroy
	 *
	 * Destroys the current session.
	 *
	 * @param	string	$session_id	Session ID
	 * @return	bool
	 */
	public function destroy($session_id)
	{
		if (isset($this->_memcached, $this->_lock_key))
		{
			$this->_memcached->delete($this->_key_prefix.$session_id);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
			$this->_cookie_destroy();
			return $this->_success;
		}

		return $this->_fail();
<<<<<<< HEAD
=======
=======
			return $this->_cookie_destroy();
		}

		return FALSE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	}

	// ------------------------------------------------------------------------

	/**
	 * Garbage Collector
	 *
	 * Deletes expired sessions
	 *
	 * @param	int 	$maxlifetime	Maximum lifetime of sessions
	 * @return	bool
	 */
	public function gc($maxlifetime)
	{
		// Not necessary, Memcached takes care of that.
<<<<<<< HEAD
		return $this->_success;
=======
<<<<<<< HEAD
		return $this->_success;
=======
		return TRUE;
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
	}

	// ------------------------------------------------------------------------

	/**
	 * Get lock
	 *
	 * Acquires an (emulated) lock.
	 *
	 * @param	string	$session_id	Session ID
	 * @return	bool
	 */
	protected function _get_lock($session_id)
	{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
		// PHP 7 reuses the SessionHandler object on regeneration,
		// so we need to check here if the lock key is for the
		// correct session ID.
		if ($this->_lock_key === $this->_key_prefix.$session_id.':lock')
		{
			if ( ! $this->_memcached->replace($this->_lock_key, time(), 300))
			{
				return ($this->_memcached->getResultCode() === Memcached::RES_NOTFOUND)
					? $this->_memcached->set($this->_lock_key, time(), 300)
					: FALSE;
			}
<<<<<<< HEAD
=======
=======
		if (isset($this->_lock_key))
		{
			return $this->_memcached->replace($this->_lock_key, time(), 300);
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
		}

		// 30 attempts to obtain a lock, in case another request already has it
		$lock_key = $this->_key_prefix.$session_id.':lock';
		$attempt = 0;
		do
		{
			if ($this->_memcached->get($lock_key))
			{
				sleep(1);
				continue;
			}

			if ( ! $this->_memcached->set($lock_key, time(), 300))
			{
				log_message('error', 'Session: Error while trying to obtain lock for '.$this->_key_prefix.$session_id);
				return FALSE;
			}

			$this->_lock_key = $lock_key;
			break;
		}
<<<<<<< HEAD
		while (++$attempt < 30);
=======
<<<<<<< HEAD
		while (++$attempt < 30);
=======
		while ($attempt++ < 30);
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7

		if ($attempt === 30)
		{
			log_message('error', 'Session: Unable to obtain lock for '.$this->_key_prefix.$session_id.' after 30 attempts, aborting.');
			return FALSE;
		}

		$this->_lock = TRUE;
		return TRUE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Release lock
	 *
	 * Releases a previously acquired lock
	 *
	 * @return	bool
	 */
	protected function _release_lock()
	{
		if (isset($this->_memcached, $this->_lock_key) && $this->_lock)
		{
			if ( ! $this->_memcached->delete($this->_lock_key) && $this->_memcached->getResultCode() !== Memcached::RES_NOTFOUND)
			{
				log_message('error', 'Session: Error while trying to free lock for '.$this->_lock_key);
				return FALSE;
			}

			$this->_lock_key = NULL;
			$this->_lock = FALSE;
		}

		return TRUE;
	}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
}
