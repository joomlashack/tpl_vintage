<?php
/**
 * @package     Vintage
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2015 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

switch ($template_style ) :

    // Old design
    default:
    case 'red':
    case 'blue':
    case 'green':
    case 'brown':
        include_once 'templates/old.php';
        break;

    // New design
    case 'red-new':
    case 'blue-new':
        include_once 'templates/new.php';
        break;

endswitch;
