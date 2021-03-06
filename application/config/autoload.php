<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
|
*/

/*
| -------------------------------------------------------------------
|  Auto-load Packages
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
<<<<<<< HEAD
$autoload['packages'] = array();

=======
<<<<<<< HEAD
$autoload['packages'] = array();

=======

$autoload['packages'] = array();


>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
<<<<<<< HEAD
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
=======
<<<<<<< HEAD
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
=======
| These are the classes located in the system/libraries folder
| or in your application/libraries folder.
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
<<<<<<< HEAD
$autoload['libraries'] = array('database','session','User_Auth','Curl');
=======
<<<<<<< HEAD
$autoload['libraries'] = array('database','curl','session','User_Auth');
=======

$autoload['libraries'] = array('database', 'session');

>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7

/*
| -------------------------------------------------------------------
|  Auto-load Drivers
| -------------------------------------------------------------------
<<<<<<< HEAD
| These classes are located in system/libraries/ or in your
| application/libraries/ directory, but are also placed inside their
| own subdirectory and they extend the CI_Driver_Library class. They
=======
<<<<<<< HEAD
| These classes are located in system/libraries/ or in your
| application/libraries/ directory, but are also placed inside their
| own subdirectory and they extend the CI_Driver_Library class. They
=======
| These classes are located in the system/libraries folder or in your
| application/libraries folder within their own subdirectory. They
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
| offer multiple interchangeable driver options.
|
| Prototype:
|
|	$autoload['drivers'] = array('cache');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
|
| You can also supply an alternative property name to be assigned in
| the controller:
|
|	$autoload['drivers'] = array('cache' => 'cch');
|
*/
$autoload['drivers'] = array();

<<<<<<< HEAD
=======
=======
*/

$autoload['drivers'] = array();


>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
<<<<<<< HEAD
$autoload['helper'] = array('url','form','my');
=======
<<<<<<< HEAD
$autoload['helper'] = array('url','form','my');
=======

$autoload['helper'] = array('url');

>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/
<<<<<<< HEAD
$autoload['config'] = array();

=======
<<<<<<< HEAD
$autoload['config'] = array();

=======

$autoload['config'] = array();


>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/
<<<<<<< HEAD
$autoload['language'] = array();

=======
<<<<<<< HEAD
$autoload['language'] = array();

=======

$autoload['language'] = array();


>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/
<<<<<<< HEAD
$autoload['model'] = array('UserInterface','AdminInterface','KurirInterface','OutletInterface');
=======
<<<<<<< HEAD
$autoload['model'] = array('UserInterface','AdminInterface','OutletInterface','KurirInterface');
=======

$autoload['model'] = array();
>>>>>>> 8cd45ab3c29762c5ce11b638e33e32d02c7ca9f7
>>>>>>> e191afbd1e524450cb37defd6ef385500e9bfeb7
