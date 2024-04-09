<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';
$campaignsDir = '/campaigns/';

switch ($request) {
    // These are the main header links
    case '':
    case '/':
        require __DIR__ . $viewDir . 'index.php';
        break;

    case '/campaign':
        require __DIR__ . $viewDir . 'campaigns.php';
        break;

    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;
    
    case '/whoweare':
        require __DIR__ . $viewDir . 'whoweare.php';
        break;
        
    case '/waystogive':
        require __DIR__ . $viewDir . 'waystogive.php';
        break;

    // These are campaign links
    case '/campaign/ramadaan_drive_02_04_2024':
        require __DIR__ . $campaignsDir . '/ramadaan_drive_02_04_2024/index.php';
        break;
            
    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

