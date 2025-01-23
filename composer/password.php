<?php

if (isset($_SERVER['HTTP_AUTHORIZATION']) && strpos($_SERVER['HTTP_AUTHORIZATION'], 'Basic ') === 0) {
    // Decode Base64-encoded "username:password"
    $auth = base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6));
    list($user, $pass) = explode(':', $auth, 2);
} else {
    $user = $pass = null;
}

$password = "fuckinghardpassword1985!";
if ($pass !== $password) {
    header('WWW-Authenticate: Basic realm="NoConsoleComposer"');
    header('HTTP/1.0 401 Unauthorized');
    exit('Unauthorized');
}
