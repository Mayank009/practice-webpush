<?php

require 'vendor/autoload.php';

use Minishlink\WebPush\WebPush;

$notification = array(
    'endpoint' => 'https://fcm.googleapis.com/fcm/send/dfGxGHVUXr0:APA91bEzJftQpttVf4sunsMkgsnAG2ux_1rhYlhXfjv83b21WvPWu5I-Up1x5nwWDj7bj2Y5lUsRvhbobAY5fiOKndCTOM10ZaxygoQ2x1sSg62ikwwaJwftmLAQwldhBMeCllAu7l9z',
    'payload' => json_encode(['title' => 'Awesomeness!', 'body' => 'DID IT!!!!']),
    'userPublicKey' => "BDM0G8Ti3ltgquu0gZuiZqR0Dl8pGoLhnyW2Q7RRmkR1mwnYMDwIYpahQ7IRhfFCCyc83CQsu8GgAfmEB3PJDrI=",
    'userAuthToken' => "8SrYfWxtUGUTW_pP6NG-8g==",
);

$webPush = new WebPush([
	'GCM' => 'AAAAPdzpRkk:APA91bFi-32-cMkolGq6r0mk9ipzFmgzvYVShv_kqR2-pZwRRRdHA2OSlC3_QY-O2zNkamvXHrVkoF7mj9cQShrOFv-_2QWpH7dxYnAoX1dIuFsKm61-8GXWwb8CNzRZyEhYGQENwqJj',
]);
$webPush->sendNotification(
    $notification['endpoint'],

    $notification['payload'], // optional (defaults null)
    
    $notification['userPublicKey'], // optional (defaults null)
    $notification['userAuthToken'], // optional (defaults null)
    true // optional (defaults false)
);