<?php

use TestApp\LinkedIn;

require_once "LinkedIn.php";

$app_id = "78iud3syyullwm";
$app_secret = "BFHiPH2vtrpzLlsf";
$callback = "http://localhost/tt/callback.php";
$scopes = "r_emailaddress r_basicprofile r_liteprofile";
$ssl = false; //TRUE FOR PRODUCTION ENV.

$linkedin = new LinkedIn($app_id, $app_secret, $callback, $scopes, $ssl);