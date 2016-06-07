<?php
switch ($template_style ) :

    // Old design
    default:
    case 'red':
    case 'blue':
    case 'green':
    case 'brown':
        include_once 'templates/old.php';
        break;

    case 'red-new':
        include_once 'templates/new.php';
        break;

endswitch;