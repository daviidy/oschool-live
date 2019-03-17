<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID','AcVHygb38X2bzA-3lrmLbasggrSVHUMcUDPItLjJz9Sv9VEWyK6H-KGlW0ZlJYUZPP4ODQeyqeEaXFJa'),
    'secret' => env('PAYPAL_SECRET','EIaBDT-vqJi32URvZePtM6u51YjUCJxHH0AGz80SBZ5C1Yx4qSOHAnUV_1bW2QqHzeVHIg7Iy29DHuXL'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','live'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
