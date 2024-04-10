<?php
    // Configuring php to only allow cookies 
    ini_set('session.use_only_cookies', 1);

    // Configuring php to only allow cookies to be accessed through HTTP
    ini_set('session.cookie_httponly', 1);

    // Setting up the cookie parameters
    session_set_cookie_params([
        'lifetime' => 1800, 
        'domain' => 'localhost',
        'path' => '/', 
        'secure' => true,
        'httponly' => true,
    ]);

    // Starting the basic session
    session_start();
    
    // Checking if the session has been set
    if (isset($_SESSION['user_id'])) {
        // Checking if the session has been set
        if (!isset($_SESSION["last_regeneration"])) {
            regenerate_session_id_loggedin();
        }
        // Running this if the user is not loggen in
        else {
            $interval = 60 * 30; // 30 minutes
            // Checking if the session has lasted longer than 30 mins
            if (time() - $_SESSION["last_regeneration"] > $interval) {
                regenerate_session_id_loggedin();
            }
        }
    }
    else {
        // Checking if the session has been set
        if (!isset($_SESSION["last_regeneration"])) {
            regenerate_session_id();
        }
        else {
            $interval = 60 * 30; // 30 minutes
            // Checking if the session has lasted longer than 30 mins
            if (time() - $_SESSION["last_regeneration"] > $interval) {
                regenerate_session_id();
            }
        }
    }


    // Function to regenerate the session id
    function regenerate_session_id() {
        // Regenerating the session id
        session_regenerate_id(true);
        $_SESSION["last_regeneration"] = time();
    }

    // Function to regenerate the session id
    function regenerate_session_id_loggedin() {
        // Regenerating the session id
        session_regenerate_id(true);

        $user_id = $_SESSION['user_id'];

        // Updating thr session id, to have it based on the user id
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "-" . $user_id;
        session_id($sessionId);

        $_SESSION["last_regeneration"] = time();
    }

?>