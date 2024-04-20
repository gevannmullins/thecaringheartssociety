<?php

require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/index.php');


get('/contact', 'views/contact.php');


get('/whoweare', 'views/whoweare.php');


get('/waystogive', 'views/waystogive.php');


get('/campaign', 'views/campaigns.php');

// Campaigns
get('/campaign/ramadaan_drive_02_04_2024', 'campaigns/ramadaan_drive_02_04_2024/index.php');
get('/campaign/food_drive_10_03_2024', 'campaigns/food_drive_10_03_2024/index.php');
get('/campaign/soup_drive_15_03_2024', 'campaigns/soup_drive_15_03_2024/index.php');
get('/campaign/baby_drive_16_03_2024', 'campaigns/baby_drive_16_03_2024/index.php');
get('/campaign/soup_drive_23_03_2024', 'campaigns/soup_drive_23_03_2024/index.php');
get('/campaign/boeber_time_26_03_2024', 'campaigns/boeber_time_26_03_2024/index.php');
get('/campaign/sandwich_drive_18_04_2024', 'campaigns/sandwich_drive_18_04_2024/index.php');
get('/campaign/blanket_drive_21_04_2024', 'campaigns/blanket_drive_21_04_2024/index.php');
get('/campaign/sanitary_drive_11_05_2024', 'campaigns/sanitary_drive_11_05_2024/index.php');

// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
get('/user/$id', 'views/user');

// Dynamic GET. Example with 2 variables
// The $name will be available in full_name.php
// The $last_name will be available in full_name.php
// In the browser point to: localhost/user/X/Y
get('/user/$name/$last_name', 'views/full_name.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
get('/product/$type/color/$color', 'product.php');

// A route with a callback
get('/callback', function(){
  echo 'Callback executed';
});

// A route with a callback passing a variable
// To run this route, in the browser type:
// http://localhost/user/A
get('/callback/$name', function($name){
  echo "Callback executed. The name is $name";
});

// Route where the query string happends right after a forward slash
get('/product', '');

// A route with a callback passing 2 variables
// To run this route, in the browser type:
// http://localhost/callback/A/B
get('/callback/$name/$last_name', function($name, $last_name){
  echo "Callback executed. The full name is $name $last_name";
});

// ##################################################
// ##################################################
// ##################################################
// Route that will use POST data
post('/user', '/api/save_user');



// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/404.php');
